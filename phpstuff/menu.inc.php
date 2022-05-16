<?php
echo '
<header class="navbar">
<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="Member/member.php">Member Page</a></li>
    <ul>
        <li><a href="Member/addmember.php">Add Member</a></li>
        <li><a href="Member/deactivatemember.php">Deactivate Member</a></li>
        <li><a href="Member/editmember.php">Edit Member</a></li>
        <li><a href="Member/searchmember.php">Search Member</a></li>
    </ul>
    <li><a href="Sales/sales.php">Sales / Product Level</a></li>
    <ul>
    <!--<li><a href="Sales/">Add Sales</a></li>-->
        <li><a href="Sales/sales.php">Remove Sales</a></li>
        <li><a href="Sales/updatesalesrecord.php">Edit Sales</a></li>
        <li><a href="Sales/searchsalesrecord.php">Search Sales</a></li>
    </ul>
    <li><a href="Report/report.php">Reports</a></li>
    <ul>
        <li><a href="Reports/viewlogsandlevels.php">View Logs and Levels</a></li>
        <li><a href="Reports/viewreport_daily.php">Daily Report</a></li>
        <li><a href="Reports/viewreport_weekly.php">Weekly Report</a></li>
        <li><a href="Reports/viewreport_monthly.php">Monthly Report</a></li>
    </ul>
</ul>
</header>';?>