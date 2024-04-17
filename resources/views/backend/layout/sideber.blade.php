 <!--- Sidemenu -->
 <div id="sidebar-menu">
     <!-- Left Menu Start -->
     <ul class="metismenu list-unstyled" id="side-menu">
         <li class="menu-title" data-key="t-menu">Menu</li>

         <li>
             <a href="{{ route('admin.') }}">
                 <i data-feather="home"></i>
                 <span data-key="t-dashboard">Dashboard</span>
             </a>
         </li>
         <li>
             <a href="javascript: void(0);" class="has-arrow">
                 <i data-feather="users"></i>
                 <span data-key="t-Users">Users</span>
             </a>
             <ul class="sub-menu" aria-expanded="false">
                 <li>
                     <a href="{{ route('admin.user.index') }}">
                         <span data-key="t-All Users">User List</span>
                     </a>
                 </li>
                 {{-- <li>
                     <a href="javascript: void(0);" class="has-arrow">
                         <span data-key="t-contacts">Contacts</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="Users-contacts-grid.html" data-key="t-user-grid">User Grid</a>
                         </li>
                         <li><a href="Users-contacts-list.html" data-key="t-user-list">User List</a>
                         </li>
                         <li><a href="Users-contacts-profile.html" data-key="t-profile">Profile</a></li>
                     </ul>
                 </li> --}}
             </ul>
         </li>

         <li>
             <a href="javascript: void(0);" class="has-arrow">
                 <i class="bx bx-receipt"></i>
                 <span data-key="t-News">News</span>
             </a>
             <ul class="sub-menu" aria-expanded="false">
                 <li><a href="{{ route('admin.news.index') }}" data-key="t-news-list">News List</a></li>
                 <li><a href="{{ route('admin.category.index') }}" data-key="t-category-list">Category List</a></li>
                 <li><a href="{{ route('admin.country.index') }}" data-key="t-Country-list">Country List</a></li>

             </ul>
         </li>

         <li>
             <a href="javascript: void(0);" class="has-arrow">
                 <i class="bx bx-pen"></i>
                 <span data-key="t-Blog">Blog</span>
             </a>
             <ul class="sub-menu" aria-expanded="false">
                 <li>
                     <a href="{{ route('admin.blog.index') }}">
                         <span data-key="t-All Blog">Blog List</span>
                     </a>
                 </li>

                 <li>
                     <a href="Users-chat.html">
                         <span data-key="t-chat">Chat</span>
                     </a>
                 </li>
             </ul>
         </li>
         <li>
             <a href="javascript: void(0);" class="has-arrow">
                 <i data-feather="file-text"></i>
                 <span data-key="t-pages">Pages</span>
             </a>
             <ul class="sub-menu" aria-expanded="false">
                 <li><a href="pages-starter.html" data-key="t-starter-page">Starter Page</a></li>
                 <li><a href="pages-maintenance.html" data-key="t-maintenance">Maintenance</a></li>

             </ul>
         </li>

         <li>
             <a href="{{ route('admin.subscribe.index') }}">
                 <i data-feather="send"></i>
                 <span data-key="t-Subscribers">Subscribers</span>
             </a>
         </li>
         <li>
             <a href="{{ route('admin.contact.index') }}">
                 <i data-feather="mail"></i>
                 <span data-key="t-Contact">Contacts</span>
             </a>
         </li>



         {{-- <li>
             <a href="javascript: void(0);" class="has-arrow">
                 <i data-feather="grid"></i>
                 <span data-key="t-Users">Users</span>
             </a>
             <ul class="sub-menu" aria-expanded="false">
                 <li>
                     <a href="Users-All Users.html">
                         <span data-key="t-All Users">All Users</span>
                     </a>
                 </li>

                 <li>
                     <a href="Users-chat.html">
                         <span data-key="t-chat">Chat</span>
                     </a>
                 </li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow">
                         <span data-key="t-email">Email</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="Users-email-inbox.html" data-key="t-inbox">Inbox</a></li>
                         <li><a href="Users-email-read.html" data-key="t-read-email">Read Email</a></li>
                     </ul>
                 </li>
                 <li>
                     <a href="javascript: void(0);" class="has-arrow">
                         <span data-key="t-invoices">Invoices</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="Users-invoices-list.html" data-key="t-invoice-list">Invoice
                                 List</a></li>
                         <li><a href="Users-invoices-detail.html" data-key="t-invoice-detail">Invoice
                                 Detail</a></li>
                     </ul>
                 </li>
                 <li>
                     <a href="javascript: void(0);" class="has-arrow">
                         <span data-key="t-contacts">Contacts</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="Users-contacts-grid.html" data-key="t-user-grid">User Grid</a>
                         </li>
                         <li><a href="Users-contacts-list.html" data-key="t-user-list">User List</a>
                         </li>
                         <li><a href="Users-contacts-profile.html" data-key="t-profile">Profile</a></li>
                     </ul>
                 </li>
             </ul>
         </li> --}}

         <li class="menu-title mt-2" data-key="t-components">Elements</li>

         <li>
             <a href="Contacts.html">
                 <i data-feather="settings"></i>
                 <span data-key="t-Contact">Setting</span>
             </a>
         </li>

     </ul>

     <div class="card sidebar-alert border-0 text-center mx-4 mb-0 mt-5">
         <div class="card-body">
             <img src="{{ asset('backend') }}/images/giftbox.png" alt="" style="width: 100px">
             <div class="mt-4">
                 <h5 class="alertcard-title font-size-14">Unlimited Access</h5>
                 <p class="font-size-10">Upgrade your plan from a Free trial, to select ‘Business Plan’.
                 </p>
                 <a href="#!" class="btn btn-primary mt-2">Upgrade Now</a>
             </div>
         </div>
     </div>
 </div>
 <!-- Sidebar -->
