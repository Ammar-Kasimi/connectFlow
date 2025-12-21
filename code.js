let buttons = document.querySelectorAll('.modify_btn');

buttons.forEach(button => {
    button.addEventListener('click', function (e) {

        let id = e.target.getAttribute('data-id');
        let name = e.target.getAttribute('data-name');
        let email = e.target.getAttribute('data-email');
        let number = e.target.getAttribute('data-number');

        document.getElementById('modal_id').value = id;
        document.getElementById('modal_name').value = name;
        document.getElementById('modal_email').value = email;
        document.getElementById('modal_number').value = number;
    });
});