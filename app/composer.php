<?php

View::composer(['layouts.default','user.*'], 'composers\Composer\UserComposer');