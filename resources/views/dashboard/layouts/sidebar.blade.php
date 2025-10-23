 <div
     class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
     <div
         class="offcanvas-md offcanvas-end bg-body-tertiary"
         tabindex="-1"
         id="sidebarMenu"
         aria-labelledby="sidebarMenuLabel">
         <div class="offcanvas-header">
             <h5 class="offcanvas-title" id="sidebarMenuLabel">
                 Company name
             </h5>
             <button
                 type="button"
                 class="btn-close"
                 data-bs-dismiss="offcanvas"
                 data-bs-target="#sidebarMenu"
                 aria-label="Close"></button>
         </div>
         <div
             class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
             <ul class="nav flex-column">
                 <li class="nav-item">
                     <a
                         class="nav-link d-flex align-items-center gap-2 {{Request::is('dashboard')? 'active': ''}}"
                         href="/dashboard">
                         <svg class="bi" aria-hidden="true">
                             <use xlink:href="#house-fill"></use>
                         </svg>
                         Dashboard
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link d-flex align-items-center gap-2 {{Request::is('dashboard/posts*')? 'active': ''}}" href="/dashboard/posts">
                         <i class="bi bi-card-text text-dark"></i>
                         My Posts
                     </a>
                 </li>
                 <hr class="my-3" />
                 <ul class="nav flex-column mb-auto">
                     <li class="nav-item">
                         <a class="nav-link d-flex align-items-center gap-2" href="#">
                             <svg class="bi" aria-hidden="true">
                                 <use xlink:href="#gear-wide-connected"></use>
                             </svg>
                             Settings
                         </a>
                     </li>
                     <li class="nav-item">
                         <form action="/logout" method="post">
                             @csrf
                             <button type="submit" class="nav-link d-flex align-items-center gap-2"> <svg class="bi" aria-hidden="true">
                                     <use xlink:href="#door-closed"></use>
                                 </svg>Logout</button>
                         </form>
                     </li>
                 </ul>
         </div>
         <hr class="my-3" />
         <h7 class="nav flex-column d-flex justify-content-between align-items-center px-3 mt-4 mb-1">
             <span class="nav-link">
                 Administrator
             </span>
         </h7>
         <ul class="nav flex-column mb-auto">
             <li class="nav-item">
                 <a class="nav-link d-flex align-items-center gap-2 {{Request::is('dashboard/categories*')? 'active': ''}}" href="/dashboard/categories">
                     <i class="bi bi-columns-gap text-dark"></i>
                     Posts Categories
                 </a>
             </li>
         </ul>
     </div>
 </div>