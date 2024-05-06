axios.get('server.php')
.then((response) => {
    console.log(response.data);
});

// const queryParams = {
//     studentIndex: 1
// };

// axios.get('server.php', {
//     params: queryParams
// })
// .then((response) => {
//     console.log(response.data);
// });
