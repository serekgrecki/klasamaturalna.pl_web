function CountDownTimer(dt)
    {
        var end = new Date(dt);

        var _second = 1000;
        var _minute = _second * 60;
        var _hour = _minute * 60;
        var _day = _hour * 24;
        var timer;

        function showRemaining() {
            var now = new Date();
            var distance = end - now;
            var days = Math.floor(distance / _day);
            var hours = Math.floor((distance % _day) / _hour);
            var minutes = Math.floor((distance % _hour) / _minute);
            var seconds = Math.floor((distance % _minute) / _second);

            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("secounds").innerHTML = seconds;
            document.getElementById("dayss").innerHTML = days;
            document.getElementById("hourss").innerHTML = hours;
            document.getElementById("minutess").innerHTML = minutes;
            document.getElementById("secoundss").innerHTML = seconds;
        }
        timer = setInterval(showRemaining, 1000);
    }
CountDownTimer('05/04/2017 12:1 AM');
