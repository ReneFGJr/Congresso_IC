<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<script>
function checkTime(m) {
    if (m < 10) 
        m = "0" + m // add zero in front of minutes < 10
    return m
}
function twelvehour(h) {
    if (h>12){
        var f = h-12
        return f;
        //console.log("h>12")
    }
    if (h==0){
        return 12
        //console.log("h==12")
    }
    else    
        return h
}
//return post or ante depending on time of day
function get_ampm(h){
    if (h<12)
        return "AM"
    if (h>=12)
       return "PM"
}
function start() {
    var today = new Date()
    var h = today.getHours()
    var m = today.getMinutes()
    var s = today.getSeconds()
    //console.log("h: "+h)
    var ampm = get_ampm(h)

    //clean both sources
    m = checkTime(m)    //add leading 0 for minutes > 10
    h = twelvehour(h)   //changes to 12hr format

    //write time to screen
    document.getElementById('time').innerHTML = h + ":" + m + ":" + s +" " + ampm
    //Since we aren't printing seconds, we can wait longer to call the function again
    var t = setTimeout(start, 1*1000) //every 2 seconds
}

var _hide_details = false
var count = 0

//hides details when toggled
function toggle(){
    //console.log(":toggle initiated:")
    var info = document.getElementById('info');
    
    //toggle the state
    if(_hide_details == false)
        _hide_details = true
    else
        _hide_details = false
    
    
    //if true and if the counter is even, hide info
    if(_hide_details == true && count%2==0){
        info.style.display = 'none'
        //console.log("Hiding Info")
    }
    else{
        info.style.display = 'block'
        //console.log("Showing Info")
    }
        
    
    count++
    //console.log(":complete:"+_hide_details)
}    
</script>

<?php
if (!isset($title_system))
    {
        $title_system ='phpStarter';
    }
?>
<style>
.thema-form
    {
        background-color: #606080;
        border: 0px solid #000000;
        font-size: 150%;
        color: #ffffff;
        font-family: "Roboto Thin","Arial","Verdana";
        width: 100%;
    }
.css_login_title
    {
        font-size: 400%;
        color: #ffffff;
        font-family: "Roboto Thin","Arial","Verdana";  
    }
.css_login_subtitle
    {
        font-size: 600%;
        color: #ffffff;
        font-family: "Roboto Thin","Arial","Verdana";   
        color: #8080a0;     
    }
.css_login
    {
        font-size: 200%;
        color: #ffffff;
        font-family: "Roboto Thin","Arial","Verdana";   
        color: #8080a0;        
    }    
.vertical-text {
    //transform: rotate(270deg);
    //transform-origin: left top 0;
}
.fcolor
    {
        color: #8080a0;
    }
.borderb
    {
        border-bottom: 2px solid #8080a0;
    }
.borderr
    {
        border-right: 2px solid #8080a0;
    }

.hd
    {
        height: 200px;
    }
.img_login
    {
        max-height: 300px;
    }      
</style>

<body style="background-color: black;"  onload="start()">
    <form method="post">
    <div class="container-fluid fcolor borderb hd"  >
        <div class="row">
            <div class="col-md-12 white text-right">
                <div id="time"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid borderb">
        <div class="row">
            <div class="col-md-2 vertical-text fcolor borderr">                
                &nbsp;              
            </div>
    
            <div class="col-md-5 vertical-text fcolor">
                <span class="css_login_title"><b><?php echo $title_system;?></b></span>
                <br>
                <span class="css_login_subtitle">log in</span>
            </div>
            <div class="col-md-5 fcolor">
                <img src="<?php echo base_url('img/logo_mini.png');?>" class="img-fluid img_login" >
            </div>            
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 vertical-text fcolor borderr">                
                &nbsp;<br>&nbsp;             
            </div>
            <div class="col-md-2 vertical-text fcolor ">
                &nbsp;<br>&nbsp;                
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 vertical-text fcolor borderr">                
                &nbsp;              
            </div>
            
            <div class="col-md-3 css_login fcolor  text-right">                
                <?php echo msg("login_user_name");?>
            </div>            
            
            <div class="col-md-3 vertical-text fcolor">                
                <input type="text" class="thema-form" name="login_user" id="login_user" autocomplete="off">
            </div>

        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 vertical-text fcolor borderr">                
                &nbsp;              
            </div>
            
            <div class="col-md-3 css_login fcolor text-right">                
                <?php echo msg("login_user_password");?>
            </div>            
            
            <div class="col-md-3 vertical-text fcolor">                
                <input type="password" class="thema-form" name="login_user" id="login_user" autocomplete="off">
            </div>

        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 vertical-text fcolor borderr">                
                &nbsp;              
            </div>
            
            <div class="col-md-3 css_login fcolor text-right">                
                &nbsp;
            </div>            
            
            <div class="col-md-3 vertical-text fcolor">                
                <input type="submit" class="btn thema-form" value="<?php echo msg("login");?>" name="action" id="action">
            </div>

        </div>
    </div>    

    <div class="container-fluid borderb">
        <div class="row">
            <div class="col-md-2 vertical-text fcolor borderr">                
                &nbsp;<br>&nbsp;             
            </div>
            <div class="col-md-2 vertical-text fcolor ">
                &nbsp;<br>&nbsp;                
            </div>
        </div>
    </div>
    </form>
</body>

<script>
    $('input').attr('autocomplete','off');
</script>