
// Creta Testimonial Showcase plugin activation
document.addEventListener('DOMContentLoaded', function () {
    const grocerymart_button = document.getElementById('install-activate-button');

    if (!grocerymart_button) return;

    grocerymart_button.addEventListener('click', function (e) {
        e.preventDefault();

        const grocerymart_redirectUrl = grocerymart_button.getAttribute('data-redirect');

        // Step 1: Check if plugin is already active
        const grocerymart_checkData = new FormData();
        grocerymart_checkData.append('action', 'check_creta_testimonial_activation');

        fetch(installcretatestimonialData.ajaxurl, {
            method: 'POST',
            body: grocerymart_checkData,
        })
        .then(res => res.json())
        .then(res => {
            if (res.success && res.data.active) {
                // Plugin is already active → just redirect
                window.location.href = grocerymart_redirectUrl;
            } else {
                // Not active → proceed with install + activate
                grocerymart_button.textContent = 'Navigate Getstart';

                const grocerymart_installData = new FormData();
                grocerymart_installData.append('action', 'install_and_activate_creta_testimonial_plugin');
                grocerymart_installData.append('_ajax_nonce', installcretatestimonialData.nonce);

                fetch(installcretatestimonialData.ajaxurl, {
                    method: 'POST',
                    body: grocerymart_installData,
                })
                .then(res => res.json())
                .then(res => {
                    if (res.success) {
                        window.location.href = grocerymart_redirectUrl;
                    } else {
                        alert('Activation error: ' + (res.data?.message || 'Unknown error'));
                        grocerymart_button.textContent = 'Try Again';
                    }
                })
                .catch(error => {
                    alert('Request failed: ' + error.message);
                    grocerymart_button.textContent = 'Try Again';
                });
            }
        })
        .catch(error => {
            alert('Check request failed: ' + error.message);
        });
    });
});
