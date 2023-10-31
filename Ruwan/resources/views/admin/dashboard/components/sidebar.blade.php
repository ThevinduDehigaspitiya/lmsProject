 <!-- start:sidebar -->
 <div class="sidebar-wrapper">
     <div class="sidebar sidebar-collapse" id="sidebar">
         <div class="sidebar__menu-group">
             <ul class="sidebar_nav">

                 <li class="">
                     <a href="javascript:void(0);" onclick="navigateToPage('{{ route('dashboard') }}');" class="active">
                         <span class="nav-icon uil uil-home"></span>
                         <span class="menu-text">Dashboard</span>
                     </a>
                 </li>

                 <li class="has-child">
                     <a href="#" class="">
                         <span class="nav-icon uil uil-graduation-cap"></span>
                         <span class="menu-text">Student manage</span>
                         <span class="toggle-icon"></span>
                     </a>

                     <ul>
                         <li class="l_sidebar">
                             <a href="{{ route('student') }}">Student</a>
                         </li>
                         <li class="l_sidebar">
                             <a href="{{ route('addstudent-profile') }}">Add Student</a>
                         </li>

                     </ul>

                 </li>

                 <li class="has-child">
                     <a href="#" class="">
                         <span class="nav-icon uil uil-briefcase"></span>
                         <span class="menu-text">Teacher manage</span>
                         <span class="toggle-icon"></span>
                     </a>

                     <ul>
                         <li class="l_sidebar">
                             <a href="{{ route('teacher') }}">Teacher</a>
                         </li>
                         <li class="l_sidebar">
                             <a href="{{ route('addteacher') }}">Add Teacher</a>
                         </li>
                     </ul>

                 </li>

                 <li class="has-child">
                     <a href="#" class="">
                         <span class="nav-icon uil uil-presentation"></span>
                         <span class="menu-text">Class manage</span>
                         <span class="toggle-icon"></span>
                     </a>

                     <ul>
                         <li class="l_sidebar">
                             <a href="#" data-layout="light"> </a>
                         </li>
                     </ul>

                 </li>

                 <li class="has-child">
                     <a href="#" class="">
                         <span class="nav-icon uil uil-check-circle"></span>
                         <span class="menu-text">Attendance</span>
                         <span class="toggle-icon"></span>
                     </a>

                     <ul>
                         <li class="l_sidebar">
                             <a href="#" data-layout="light"> </a>
                         </li>
                     </ul>

                 </li>

                 <li class="has-child">
                     <a href="#" class="">
                         <span class="nav-icon uil uil-book-open"></span>
                         <span class="menu-text">Lecture material</span>
                         <span class="toggle-icon"></span>
                     </a>

                     <ul>
                         <li class="l_sidebar">
                             <a href="#" data-layout="light"> </a>
                         </li>
                     </ul>

                 </li>

                 <li class="has-child">
                     <a href="#" class="">
                         <span class="nav-icon uil uil-bill"></span>
                         <span class="menu-text">Payment manage</span>
                         <span class="toggle-icon"></span>
                     </a>

                     <ul>
                         <li class="l_sidebar">
                             <a href="#" data-layout="light"> </a>
                         </li>
                     </ul>

                 </li>



             </ul>

         </div>
     </div>
 </div>

 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script>
     function navigateToPage(url) {
         window.location.href = url;
     }
 </script>
 <!-- ends:sidebar -->
