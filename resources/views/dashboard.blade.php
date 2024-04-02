<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
 <link rel="stylesheet" href="{{asset('assets/css/stylem.css')}}">
 <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
</head>
<body>
    <nav class="sidebar">
        <div class="logo-menu">
            <img src="{{asset('assets/Images/logo.jpeg')}}" >
        
            <!-- <i class='bx bxl-graphql'></i> -->
                       
        </div>

        <ul class="list">

      
        <li class="list-item active"> <a href="dashboard"> <i class='bx bxs-home'></i> <span class="link-name" style="--i:1">Dashboard</span></a> </li>

        <li class="list-item"> <a href="Supervisor"> <i class='bx bxs-user'></i> <span class="link-name" style="--i:2">Supervisor Selection</span></a></li>
       
        <li class="list-item"> <a href="FinalizeSupervisor"> <i class='bx bxs-user-rectangle'></i> <span class="link-name" style="--i:3">Finalized Supervisor</span></a></li>

        <li class="list-item"> <a href="Title"> <i class='bx bxs-notepad'></i><span class="link-name" style="--i:4">Title Selection</span></a></li>

        <li class="list-item"> <a href="peercollaboration"><i class='bx bx-male-female'></i><span class="link-name" style="--i:5">Peer Collaboration</span></a></li>

        <li class="list-item"> <a href="Work"><i class='bx bx-upload'></i><span class="link-name" style="--i:6">Work Submission</span></a> </li>

        <li class="list-item"> <a href="annoucement"><i class='bx bxs-volume-full'></i><span class="link-name" style="--i:7">Announcement</span></a></li>

        <li class="list-item"> <a href="Analytics"><i class='bx bxs-bar-chart-square'></i><span class="link-name" style="--i:8">Analytics</span></a></li>

        <li class="list-item"> <a href="Livestat"><i class='bx bx-stats'></i><span class="link-name" style="--i:9">Livestats</span></a></li>

        <li class="list-item"> <a href="#"><i class='bx bx-user-pin'></i><span class="link-name" style="--i:10">RBAC</span></a></li>

        <li class="list-item"> <a href="Usersupport"><i class='bx bx-cog'></i><span class="link-name" style="--i:11">Setting</span></a></li>

       </ul>


        <ul class="img-list">
            <li>
              
                <img class="mg" src="{{asset('assets/Images/mng.jpg')}}" alt="" >
            </li>
        </ul>
    </nav>


</body>
</html>