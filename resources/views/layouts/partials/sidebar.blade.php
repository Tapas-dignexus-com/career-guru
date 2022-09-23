<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="assets/images/Career Guru-Logo-02.png" alt="" style="width:150px; padding-left: 30px;">
            <!-- <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon"> -->
            <img src="" alt="">
        </div>
        <div>
            <!-- <h4 class="logo-text">Carrer Guru</h4> -->
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>

    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ url('/') }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
            <ul>

            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <i class="fadeIn animated bx bx-book"></i>
                </div>

                <div class="menu-title">Exam Management</div>
            </a>
            <ul>
                <li> <a href="{{ url('/add-exam') }}"><i class="fadeIn animated bx bx-message-square-add"></i>Add
                        Exam</a>
                </li>
                <li> <a href="{{ url('/exam-list') }}"><i class="fadeIn animated bx bx-list-ol"></i>Exam List </a>
                </li>

                <li> <a href="{{ url('/exam-category') }}"><i class="bx bx-right-arrow-alt"></i>Exam Catagory</a>
                </li>
        </li>
    </ul>
    </li>

    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon">
                <i class="fadeIn animated bx bx-book-content"></i>
            </div>
            <div class="menu-title">Subject</div>
        </a>
        <ul>
            <!-- <li> <a href="ecommerce-products.html"><i class="bx bx-right-arrow-alt"></i>Products</a>
                </li> -->
            <li> <a href="{{ url('/add-subject') }}"><i class="fadeIn animated bx bx-message-square-add"></i>Add
                    Subject </a>
            </li>
            <li> <a href="{{ url('/view-subject-list') }}"><i class="lni lni-list"></i>View / List</a>
            </li>

        </ul>
    </li>

    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon">
                <!-- <i class="fa fa-address-card-o" ></i> -->
                <i class="fadeIn animated bx bx-file"></i>
            </div>
            <div class="menu-title">Topic</div>
        </a>
        <ul>
            <li> <a href="{{ url('/add-topic') }}"><i class="fadeIn animated bx bx-message-square-add"></i>Add </a>
            </li>
            <li> <a href="{{ url('/view-list-topic') }}"><i class="lni lni-list"></i>View / List</a>
            </li>
        </ul>
    </li>

    <!-- \\\\\\\\\\\\\\\\\\\\\\\\\exam start\\\\\\\\\\\\\\\\\\\ -->
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon">
                <!-- <i class="fa fa-address-card-o" ></i> -->
                <i class="fadeIn animated bx bx-question-mark"></i>
            </div>
            <div class="menu-title">Question Management</div>
        </a>
        <ul>
            <!-- <li> <a href="ecommerce-products.html"><i class="bx bx-right-arrow-alt"></i>Products</a>
                </li> -->
            <!-- <li> <a href="add_qestion.html"><i class="fadeIn animated bx bx-add-to-queue"></i>Add Question Sets</a>
                </li> -->
            <li> <a href="{{ url('/add-question') }}"><i class="fadeIn animated bx bx-message-square-add"></i>Add
                    Question</a>
            </li>
            <li> <a href="{{ url('/question-list') }}"><i class="lni lni-list"></i>List Question Set
                    Details</a>
            </li>
        </ul>
    </li>


    <!-- \\\\\\\\\\\\\\\\\\\\\\\\\student start\\\\\\\\\\\\\\\\\\\ -->
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="bx bx-user-circle"></i>
            </div>
            <div class="menu-title">Student Management</div>
        </a>
        <ul>

            <li> <a href="{{ url('/add-student') }}"><i class="fadeIn animated bx bx-user-plus"></i>Add New Student
                </a>
            </li>
            <li> <a href="{{ url('/student-list') }}"><i class="lni lni-list"></i>Student List</a>
            </li>
        </ul>
    </li>
    <!-- \\\\\\\\\\\\\\\\\\\Coin Balance Calculator start\\\\\\\\\\\\\\\\\ -->
    <a href="coin_balance.html">
        <div class="parent-icon"><i class='fab fa-bitcoin'></i>
        </div>
        <div class="menu-title">Package Management</div>
    </a>

    <!-- \\\\\\\\\\\\\\\\\\push notitiaction start\\\\\\\\\\\\\\\ -->
    <a href="user-profile.html">
        <div class="parent-icon"><i class="fa-regular fa-message"></i>
        </div>
        <div class="menu-title">Push Notification</div>
    </a>

    <!-- \\\\\\\\\\\\\\\\\\Email start\\\\\\\\\\\\\\\ -->
    <a href="my_email.html">
        <div class="parent-icon"><i class="fa-regular fa-envelope"></i>
        </div>
        <div class="menu-title">Email</div>
    </a>

    <!-- \\\\\\\\\\\\\\\\\\User manageme start\\\\\\\\\\\\\\\ -->

    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="fa fa-users"></i>
            </div>
            <div class="menu-title">User Management</div>
        </a>
        <ul>
            <li> <a href="role_management.html"><i class="fadeIn animated bx bx-highlight"></i>Role Management
                </a>
            </li>
            <li> <a href="user_management.html"><i class="fadeIn animated bx bx-user-plus"></i>Add User
                </a>
            </li>
            <li> <a href="user_management_list.html"><i class="lni lni-list"></i>User list</a>
            </li>
        </ul>
    </li>
    <!-- \\\\\\\\\\\\\\\\\\Certificate start\\\\\\\\\\\\\\\ -->
    <a href="certificate.html">
        <div class="parent-icon">
            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
        </div>

        <div class="menu-title">Certificate</div>
    </a>

    <!-- \\\\\\\\\\\\\\\\\\Offer management start\\\\\\\\\\\\\\\ -->


    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="lni lni-offer"></i>
            </div>
            <div class="menu-title">Coupon management</div>
        </a>
        <ul>

            <li> <a href="new_coupon.html"><i class="fadeIn animated bx bx-plus"></i>New Coupon
                </a>
            </li>
            <li> <a href="all_coupons.html"><i class="fadeIn animated bx bx-file"></i>All Coupons</a>
            </li>
            <li> <a href=" #"><i class="fadeIn animated bx bx-file"></i>offer Page Management</a>
            </li>
        </ul>
    </li>

    <!-- \\\\\\\\\\\\\\\\\\Website news management start\\\\\\\\\\\\\\\ -->
    <a href="app-emailbox.html">
        <div class="parent-icon"><i class="fa-solid fa-newspaper"></i>
        </div>
        <div class="menu-title">Website News Management</div>
    </a>

    <!-- \\\\\\\\\\\\\\\\\\Upcomming Exam start\\\\\\\\\\\\\\\ -->
    <a href="app-emailbox.html">
        <div class="parent-icon"><i class="fa-sharp fa-solid fa-clipboard-question"></i>
        </div>
        <div class="menu-title">Upcomming Exam start</div>
    </a>
    <!-- \\\\\\\\\\\\\\\\\\ranking Student Managemeng\\\\\\\\\\\\\\\ -->
    <a href="app-emailbox.html">
        <div class="parent-icon"><i class="lni lni-graduation"></i>
        </div>
        <div class="menu-title">Ranking student Management</div>
    </a>


    <a href="app-emailbox.html">
        <div class="parent-icon"><i class="fa-sharp fa-solid fa-wrench"></i>
        </div>
        <div class="menu-title">Setting</div>
    </a>

    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->
