document.getElementById('loginForm').addEventListener('submit', function(event) { 
    event.preventDefault();

    const correctUsername = 'Jingga';
    const correctPassword = 'Jingga';
    
    const username = document.getElementById('username').value; 
    const password = document.getElementById('password').value;
    
    if(username === correctUsername && password === correctPassword){
        alert('Login Bro');
        window.location.href = 'index';
    
    }else{
    
    alert('login gagal');
    
    }
});