<!--Left sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="active" href="<?= site_url('main/dashboard')?>">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-sitemap"></i>
                    <span>Projects</span>
                </a>
                <ul class="sub">
                    <li><a  href="<?= site_url('main/manage_projects')?>">Manage Projects</a></li>
                    <li><a  href="<?= site_url('main/add_project')?>">Add Project</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-tasks"></i>
                    <span>Tasks</span>
                </a>
                <ul class="sub">
                    <li><a  href="<?= site_url('main/manage_tasks')?>">Manage Tasks</a></li>
                    <li><a  href="<?= site_url('main/add_task')?>">Add Task</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-bell"></i>
                    <span>Tickets</span>
                </a>
                <ul class="sub">
                    <li><a  href="<?= site_url('main/manage_tickets')?>">Manage Tickets</a></li>
                    <li><a  href="<?= site_url('main/add_ticket')?>">Add Ticket</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-comments"></i>
                    <span>Discussions</span>
                </a>
                <ul class="sub">
                    <li><a  href="<?= site_url('main/manage_discussions')?>">Manage Discussions</a></li>
                    <li><a  href="<?= site_url('main/a  _discussion')?>">Add Discussion</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Reports</span>
                </a>
                <ul class="sub">
                    <li><a  href="<?= site_url('main/project_reports')?>">Project Reports</a></li>
                    <li><a  href="<?= site_url('main/task_reports')?>">Task Reports</a></li>
                    <li><a  href="<?= site_url('main/ticket_reports')?>">Ticket Reports</a></li>
                    <li><a  href="<?= site_url('main/discussion_reports')?>">Discussion Reports</a></li>
                    <li><a  href="<?= site_url('main/time_reports')?>">Time Reports</a></li>
                    <li><a  href="<?= site_url('main/gantt_charts')?>">Gantt Charts</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-user"></i>
                    <span>Users</span>
                </a>
                <ul class="sub">
                    <li><a  href="<?= site_url('main/manage_users')?>">Manage Users</a></li>
                    <li><a  href="<?= site_url('main/add_user')?>">Add User</a></li>
                    <li><a  href="<?= site_url('main/send_email')?>">Send Email</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-gear"></i>
                    <span>Configuration</span>
                </a>
                <ul class="sub">
                    <li><a  href="<?= site_url('main/-')?>">-</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-wrench"></i>
                    <span>Tools</span>
                </a>
                <ul class="sub">
                    <li><a  href="<?= site_url('main/-')?>">-</a></li>
                </ul>
            </li>

            <!--multi level menu end-->

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--Left sidebar end-->
