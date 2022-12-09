import axios from 'axios';

export default window.cart = function () {
    return {
        destroy(index) {
            if (!!index) {
                let cartProducts = document.getElementById('cart-products')
                axios.post('/destroy', {
                     index: index
                })
                .then(({data}) => {
                    cartProducts.innerHTML = data.html;
                });
            }
        },

        update(index, quantity) {
            if (!!index && quantity != undefined) {
                let cartProducts = document.getElementById('cart-products')
                axios.post('/update', {
                     index: index,
                     quantity: quantity
                })
                .then(({data}) => {
                    cartProducts.innerHTML = data.html;
                });
            }
        }
    }
}