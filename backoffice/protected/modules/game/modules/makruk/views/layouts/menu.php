<ul class="nav nav-tabs">
    <li>
        <a href="<?php echo $this->createUrl('user/admin') ?>">
            <i class="icon-user icon-3x"></i><br/>User
        </a>
    </li>
    <li>
        <a href="<?php echo $this->createUrl('statuser/admin') ?>">
            <i class="icon-sitemap icon-3x"></i><br/>Stat User
        </a>
    </li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="icon-gamepad icon-3x"></i><br/>Game
            <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="<?php echo $this->createUrl('game/create')?>">Create</a></li>
            <li><a href="<?php echo $this->createUrl('game/admin')?>">Manage</a></li>
        </ul>
    </li>
    <li>
        <a href="<?php echo $this->createUrl('match/admin') ?>">
            <i class="icon-random icon-3x"></i><br/>Match
        </a>
    </li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="icon-dollar icon-3x"></i><br/>Topup
            <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="<?php echo $this->createUrl('topup/redeem')?>">Redeem</a></li>
            <li><a href="<?php echo $this->createUrl('topup/admin')?>">Manage</a></li>
        </ul>
    </li>
    <li>
        <a href="<?php echo $this->createUrl('moneylog/admin') ?>">
            <i class="icon-money icon-3x"></i><br/>Money log
        </a>
    </li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="icon-picture icon-3x"></i><br/>Advertise
            <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="<?php echo $this->createUrl('advertise/create')?>">Create</a></li>
            <li><a href="<?php echo $this->createUrl('advertise/admin')?>">Manage</a></li>
        </ul>
    </li>
</ul>