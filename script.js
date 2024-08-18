/*
const form = document.querySelector('Form');
const FullName = document.getElementById(full_name)
const Email = document.getElementById(email)
const phone = document.getElementById(phone_number)
const message = document.getElementById(comment)

function sendEmail() {
    const bodyMessage= ' FullName ${FullName.value}<br> Email: ${Email.value}<br> 
    Email.send({
        SecureToken : "C973D7AD-F097-4B95-91F4-40ABC5567812",
        To : 'them@website.com',
        From : "you@isp.com",
        Subject : "This is the subject",
        Body : bodyMessage
    }).then(
      message => alert(message)
    );
}

form.addEventListener("submit", (e) =>{
    e.preventDefault();

    sendEmail();
})


const form = document.querySelector('form'); // 'Form' should be lowercaseconstFullName = document.getElementById('full_name'); // IDs should be in quotesconstEmail = document.getElementById('email');
const phone = document.getElementById('phone_number');
const message = document.getElementById('comment');

functionsendEmail() {
    const bodyMessage = `
        Full Name: ${FullName.value}<br>
        Email: ${Email.value}<br>
        Phone: ${phone.value}<br>
        Message: ${message.value}
    `;

    Email.send({
        SecureToken : "C973D7AD-F097-4B95-91F4-40ABC5567812",
        To : 'them@website.com',
        From : "you@isp.com",
        Subject : "This is the subject",
        Body : bodyMessage
    }).then(
        message =>alert(message)
    ).catch(
        error =>alert('Failed to send email: ' + error)
    );
}

form.addEventListener("submit", (e) => {
    e.preventDefault();
    sendEmail();
});

*/