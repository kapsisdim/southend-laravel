var quantity = document.getElementById('quantity'),
quantity_val = parseInt(quantity.value),
btn_add = document.querySelector('.add'),
btn_remove = document.querySelector('.remove')

quantity.addEventListener('keyup', (e) => {
    quantity_val = parseInt(quantity.value)
});

btn_add.addEventListener('click', (e) => {
    if (e.shiftKey) {
        quantity_val += 10
    } else {
        quantity_val++
    }
    quantity.value = quantity_val;
});

btn_remove.addEventListener('click', (e) => {
    if (quantity_val > 11 && e.shiftKey) {
        quantity_val -= 10
    } else if (quantity_val > 1) {
        quantity_val--
    }
    quantity.value = quantity_val;
});