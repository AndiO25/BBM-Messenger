<style>
.nav-side-menu {
  overflow: auto;
  font-family: verdana;
  font-size: 12px;
  font-weight: 200;
  background-color: #595959;
  position: fixed;
  top: 0;
  left: 0;
  width: 300px;
  height: 100%;
  color: #fff;
}
.nav-side-menu .brand {
  background-color: #595959;
  line-height: 50px;
  display: block;
  text-align: center;
  font-size: 14px;
}
.nav-side-menu .toggle-btn{
  display: none;
}
.nav-side-menu ul,
.nav-side-menu li {
  list-style: none;
  padding: 0px;
  margin: 0px;
  line-height: 35px;
  cursor: pointer;
}
.nav-side-menu ul :not(collapsed) .arrow:before,
.nav-side-menu li :not(collapsed) .arrow:before {
  font-family: FontAwesome;
  content: "\f078";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
  float: right;
}
.nav-side-menu ul .active,
.nav-side-menu li .active {
  /*border-left: 3px solid white*/
  background-color: #fed600;
}
.nav-side-menu ul .sub-menu li.active,
.nav-side-menu li .sub-menu li.active {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li.active a,
.nav-side-menu li .sub-menu li.active a {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li,
.nav-side-menu li .sub-menu li {
  background-color: #595959;
  border: none;
  line-height: 28px;
  margin-left: 0px;
}
.nav-side-menu ul .sub-menu li:hover,
.nav-side-menu li .sub-menu li:hover {
  background-color: #fed600;
  color: #070707;
}
.nav-side-menu ul .sub-menu li:before,
.nav-side-menu li .sub-menu li:before {
  font-family: FontAwesome;
  content: "\f105";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
  color: #fff;
}
.nav-side-menu li {
  padding-left: 0px;
  border-bottom: 1px solid #343333;
}
.brand a {
  text-decoration: none;  
  color: #fff;
}

.brand a:hover {
  text-decoration: none;  
  color: #343333;  
}

.nav-side-menu li a {
  text-decoration: none;
  color: #fff;
}
.nav-side-menu li a i {
  padding-left: 10px;
  width: 20px;
  padding-right: 20px;
}
.nav-side-menu li:hover {
  background-color: #fed600;
  color: #070707;  
}
@media (max-width: 650px) {
  .nav-side-menu {
    position: relative;
    width: 100%;
    margin-bottom: 10px;
  }
  .nav-side-menu .toggle-btn {
    display: block;
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 10px;
    padding: 3px;
    background-color: #595959;
    color: #fff;
    width: 40px;
    text-align: center;
  }
  .user {
    text-align: left !important;
    font-size: 22px;
    padding-left: 10px;
    line-height: 50px !important;
    color: white;
  }

  .brand {
    text-align: left !important;
    font-size: 22px;
    padding-left: 10px;
    line-height: 50px !important;
  }
}
@media (min-width: 767px) {
  .nav-side-menu .menu-list .menu-content {
    display: block;
  }
}
body {
  margin: 0px;
  padding: 0px;
}
</style>

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<div class="nav-side-menu">
<!--The username information can be put on the top nava bar-->
    <div class="brand">
    <a href="#"><i class="fa fa-user fa-lg user"></i> Profile</a></div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
    </div>
    </div>
<br>
  <!--menu starts-->
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content">
                <li data-target="#service" >
                  <a href="#"><i ></i> &emsp; TEAMS </a>
                </li>  
                <ul class="sub-menu" id="service">
                  <li>Team 1</li>
                  <li>Team 2</li>
                  <li>Team 3</li>
                </ul>

                <li data-target="#new">
                  <a href="#"><i></i> &emsp; USERS</a>
                </li>
                <ul class="sub-menu" id="new">
                        <li>allan</li>
                        <li>josue</li>
                        <li>andio</li>
                        <li>meiza</li>
                        <li>nacho</li>
                </ul>

            </ul>
     </div>
</div>