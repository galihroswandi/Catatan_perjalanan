// const login_check = () => {
//     const url = './config/login/index.php';
//     const data = {
//         nik: document.getElementById('nik').value,
//         nama: document.getElementById('nama').value,
//     };

//     fetch(url, {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json',
//         },
//         body: JSON.stringify(data),
//     })
//         .then((response) => response.json())
//         .then((data) => {
//             console.log('Succes', data);
//         });
// };

// const btn_login = document.getElementById('btn-login');
// btn_login.addEventListener('click', (e) => {
//     e.preventDefault();
//     login_check();
// });