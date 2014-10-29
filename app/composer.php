<?php

View::composer(['layouts.default','user.*'], 'composers\Composer\UserComposer');
View::composer(['tutorial.*'],'composers\Composer\TutorialComposer');