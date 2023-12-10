function showTime() {
    var a_p = "";
    var today = new Date();
    var curr_hour = today.getHours();
    var curr_minute = today.getMinutes();
    var curr_second = today.getSeconds();
    if (curr_hour < 24) {
        a_p = "AM";
    } else {
        a_p = "PM";
    } if (curr_hour == 0) {
        curr_hour = 24;
    } if (curr_hour > 23) {
        curr_hour = curr_hour - 24;
    }
        curr_hour = checkTime(curr_hour);
        curr_minute = checkTime(curr_minute);
        curr_second = checkTime(curr_second);
    document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
}

function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
return i;
}
    setInterval(showTime, 500);

window.addEventListener('scroll', function(){
    var scroll = document.querySelector('#toTopBtn');
    scroll.classList.toggle("active" , window.scrollY > 350)
})

function scrolltoTop(){
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    })
}