<?php

View::composer(['layouts.*','user.*'], 'composers\Composer\UserComposer');
View::composer(['tutorial.*'],'composers\Composer\TutorialComposer');