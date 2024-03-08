async function addToFavorites(product_id) {
    try {
        const response = await fetch('api/wishlist.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'add_to_favorites=true&product_id=' + product_id,
        });

        if (response.ok) {
            const responseData = await response.text();
            console.log(responseData);
        } else {
            console.error('Failed to add to favorites:', response.status, response.statusText);
        }
    } catch (error) {
        console.error('Error during fetch:', error);
    }
}

async function removeFromFavorites(product_id) {
    try {
        const response = await fetch('api/wishlist.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'remove_from_favorites=true&product_id=' + product_id,
        });

        if (response.ok) {
            const responseData = await response.text();
            console.log('produto eliminado');

            // Find the parent <tr> element and remove it
            const button = document.querySelector(`[data-product-id="${product_id}"]`);
            if (button) {
                const trElement = button.closest('tr');
                if (trElement) {
                    trElement.remove();
                }
            }
        } else {
            console.error('Failed to remove from favorites:', response.status, response.statusText);
        }
    } catch (error) {
        console.error('Error during fetch:', error);
    }
}