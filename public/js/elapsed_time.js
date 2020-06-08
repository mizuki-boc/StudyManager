// 経過時間を表示する
var count = 0;
var h = 0;
var m = 0;
var s = 0;
var elapsed_time = setInterval(
    function () {
        var twoDigit = function(num){
            var digit
            if( num < 10 ){
            digit = "0" + num;
            } else {
            digit = num;
            }
            return digit;
        }
        count++;
        
        h = Math.floor(count / 3600);
        m = Math.floor((count - h * 3600) / 60);
        s = Math.floor(count - h * 3600 - m * 60);

        var ans;

        if (h == 0) {
            ans = twoDigit(m) + "分" + twoDigit(s) + "秒" + "経過";
        } else {
            ans = h + "時間" + twoDigit(m) + "分" + twoDigit(s) + "秒" + "経過";
        }
        // xx時間yy分zz秒経過 の表示にしたい．
        document.getElementById("elapsed_time").textContent = ans;
    }
    , 1000
)