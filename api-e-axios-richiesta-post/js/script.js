const data = {
    newInfo: 'paperino'
};

axios.post('server.php', data, {
    headers: {'Content-Type': 'multipart/form-data'}
})
.then((response) => {
    console.log(response.data);
});
