<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="{{ url('/') }}">Home</a>
  <a href="{{ url('/dashboard') }}">Dashboard</a>
  <a href="{{ url('/about') }}">About</a>
  <a href="{{ url('/services') }}">Services</a>
  <a href="{{ url('/contact') }}">Contact</a>
</div>

<style>
    body
    {
        font-family: "Lato", sans-serif;
    }

    .sidenav
    {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #223a66;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }

    .sidenav a
    {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #fff;
        display: block;
        transition: 0.3s;
    }

    .sidenav a:hover
    {
        color: #e12454;
    }

    .sidenav .closebtn
    {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }

    @media screen and (max-height: 450px)
    {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
    }
</style>

<script>
    function openNav()
    {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav()
    {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>

