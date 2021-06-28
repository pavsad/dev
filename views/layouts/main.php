<?php
    /* @var $this \yii\web\View */
    /* @var $content string */
    use yii\helpers\Url;
    use yii\helpers\Html;
    \humhub\assets\AppAsset::register($this);

    use humhub\modules\user\widgets\Image;

    $userModel = Yii::$app->user->identity;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <title><?= strip_tags($this->pageTitle); ?></title>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <?php $this->head() ?>
        <?= $this->render('head'); ?>
    </head>
    <body>
        <?php $this->beginBody(); ?>

        <div class="hidden-from-desktop">
            <div class="nav-toggle menu-icon-open">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="89" height="89" viewBox="0 0 89 89" fill="none"> <g opacity="0.8" filter="url(#filter0_d)"> <rect x="4" width="81" height="81" fill="#F4F4F4"/> </g> <g opacity="0.8"> <rect x="24.5693" y="22.9911" width="38.7443" height="2.86995" rx="1.43498" fill="#045269"/> </g> <g opacity="0.8"> <rect x="24.5693" y="37.3409" width="38.7443" height="2.86995" rx="1.43498" fill="#045269"/> </g> <g opacity="0.8"> <rect x="24.5693" y="53.1256" width="38.7443" height="2.86995" rx="1.43498" fill="#045269"/> </g> <defs> <filter id="filter0_d" x="0" y="0" width="89" height="89" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/> <feOffset dy="4"/> <feGaussianBlur stdDeviation="2"/> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/> <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/> </filter> </defs> </svg>
                </div>
            </div>
        </div>

        <div class="sidebar mobile-navigation">
            <div class="topbar-frame">
                <div class="topbar">
                    <div class="container">
                        <div class="hidden-from-desktop nav-toggle mobile-icon">
                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none"> <rect x="2.23022" y="0.707107" width="52.3979" height="2.1527" rx="1.07635" transform="rotate(45.0205 2.23022 0.707107)" fill="#045269" stroke="#045269"/> <rect x="0.000253171" y="0.707107" width="52.3979" height="2.1527" rx="1.07635" transform="matrix(-0.706854 0.70736 0.70736 0.706854 37.2454 0.207107)" fill="#045269" stroke="#045269"/> </svg></div>
                        </div>
                        <div class="item mobile-close">
                            <a href="<?= Url::to(['/dashboard/dashboard']); ?>">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 41 41" fill="none"> <path d="M20.4286 40C31.1587 40 39.8571 31.3015 39.8571 20.5714C39.8571 9.84129 31.1587 1.14282 20.4286 1.14282C9.69847 1.14282 1 9.84129 1 20.5714C1 31.3015 9.69847 40 20.4286 40Z" stroke="#045269" stroke-width="2" stroke-miterlimit="10" style="fill: transparent !important"/> <path d="M33.5711 3.71429C33.5711 5.80357 31.8881 7.42857 29.8569 7.42857C27.7676 7.42857 26.1426 5.74554 26.1426 3.71429C26.1426 1.625 27.8256 0 29.8569 0C31.8881 0 33.5711 1.68303 33.5711 3.71429Z" fill="#045269"/> </svg></div>
                                <span class="name"><?= Yii::t('base', 'Лента'); ?></span>
                            </a>
                        </div>
                        <?= \humhub\widgets\NotificationArea::widget(); ?>
                        <div class="item mobile-close">
                            <a href="<?= Url::to(['/directory/directory/members']); ?>">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none"> <path d="M44 22.0001C44 9.86919 34.1308 0 22.0001 0C16.295 0 10.8866 2.17444 6.77137 6.12264C6.25179 6.62118 6.23476 7.44635 6.73313 7.96593C7.2315 8.48551 8.05684 8.50237 8.57642 8.00417C12.2039 4.5241 16.9712 2.60745 22.0001 2.60745C32.6932 2.60745 41.3927 11.3069 41.3927 22.0001C41.3927 26.863 39.5833 31.5148 36.2976 35.099C32.6312 39.0987 27.4199 41.3927 22.0001 41.3927C16.8003 41.3927 11.7923 39.281 8.15627 35.5774C8.17783 35.4842 8.20182 35.3921 8.22546 35.2998C8.24423 35.2263 8.26161 35.1522 8.2816 35.0792C8.3122 34.968 8.34627 34.8583 8.37982 34.7484C8.39981 34.6832 8.41789 34.6172 8.43875 34.5525C8.47942 34.4265 8.52375 34.3024 8.56825 34.1783C8.58511 34.1313 8.60023 34.0835 8.61762 34.0368C8.74434 33.6957 8.88531 33.3621 9.0395 33.0367C9.06262 32.9881 9.08783 32.9408 9.11147 32.8924C9.16675 32.7794 9.22202 32.6665 9.2806 32.5556C9.31155 32.497 9.34475 32.4398 9.37673 32.3817C9.43079 32.2832 9.48433 32.1843 9.54083 32.0874C9.57716 32.025 9.61592 31.9642 9.6533 31.9025C9.70823 31.8119 9.76281 31.7212 9.81983 31.6322C9.8605 31.5689 9.90309 31.5074 9.94481 31.445C10.0018 31.3598 10.0583 31.2743 10.1172 31.1905C10.1616 31.1274 10.2078 31.066 10.2534 31.0038C10.3125 30.9231 10.3712 30.8423 10.4321 30.7632C10.4799 30.701 10.5296 30.6401 10.5786 30.5789C10.64 30.5023 10.7011 30.4253 10.7642 30.3502C10.8152 30.2893 10.8677 30.2301 10.9198 30.1703C10.9836 30.0971 11.0474 30.0239 11.1129 29.9521C11.1668 29.893 11.2221 29.8355 11.277 29.7774C11.3434 29.7075 11.4098 29.6377 11.4776 29.5693C11.5343 29.5123 11.592 29.4567 11.6496 29.4009C11.7184 29.3343 11.7874 29.2677 11.8578 29.2027C11.9171 29.148 11.9772 29.0943 12.0374 29.0407C12.1085 28.9773 12.1801 28.9143 12.2526 28.8526C12.3143 28.8001 12.3769 28.7485 12.4398 28.6972C12.5133 28.6373 12.5872 28.5776 12.6619 28.5192C12.7261 28.4692 12.7909 28.42 12.8559 28.3711C12.9317 28.3145 13.0079 28.2583 13.0849 28.2034C13.1514 28.1557 13.2184 28.109 13.2858 28.0628C13.3637 28.0094 13.4421 27.9569 13.521 27.9053C13.5897 27.8604 13.6587 27.8163 13.7282 27.7726C13.8082 27.7226 13.8888 27.6735 13.97 27.6252C14.0406 27.5833 14.1115 27.5416 14.183 27.5011C14.265 27.4543 14.3479 27.409 14.4312 27.3641C14.5037 27.325 14.5763 27.2863 14.6495 27.2485C14.7336 27.2052 14.8187 27.1635 14.9038 27.1222C14.9781 27.0862 15.0523 27.0502 15.1272 27.0156C15.2136 26.9758 15.3007 26.9376 15.3879 26.8997C15.4636 26.8668 15.539 26.8339 15.6151 26.8027C15.7038 26.7663 15.7931 26.7317 15.8827 26.6975C15.9595 26.6679 16.036 26.6382 16.1135 26.6102C16.2042 26.5774 16.296 26.5468 16.3876 26.516C16.4653 26.4899 16.5429 26.4633 16.6213 26.4387C16.7143 26.4095 16.8083 26.3825 16.9024 26.3556C16.9807 26.333 17.059 26.3095 17.1381 26.2885C17.2338 26.2629 17.3305 26.24 17.4271 26.2165C17.5057 26.1976 17.5841 26.1776 17.6632 26.16C17.7619 26.1381 17.8619 26.1192 17.9615 26.0997C18.0397 26.0844 18.1176 26.0677 18.1963 26.0538C18.2991 26.0357 18.4029 26.0208 18.5063 26.0051C18.5831 25.9935 18.6594 25.9804 18.7366 25.9704C18.8456 25.9559 18.9558 25.9452 19.0657 25.9335C19.1383 25.9259 19.2106 25.9165 19.2836 25.91C19.4057 25.8993 19.5289 25.8927 19.6518 25.8854C19.7135 25.8817 19.7749 25.8761 19.8368 25.8734C20.0221 25.8652 20.2083 25.8608 20.3955 25.8608H23.6049C27.3718 25.8608 30.9077 27.5312 33.3058 30.4437C33.7633 30.9994 34.5852 31.079 35.1409 30.6214C35.6967 30.1637 35.7763 29.3421 35.3186 28.7862C33.2745 26.3039 30.5452 24.5703 27.5168 23.7646C29.2403 22.2375 30.3295 20.0099 30.3295 17.5316C30.3295 12.9389 26.593 9.20221 22.0001 9.20221C17.4072 9.20221 13.6707 12.9387 13.6707 17.5316C13.6707 20.0099 14.7599 22.2374 16.4832 23.7645C16.4405 23.7759 16.3974 23.7867 16.3546 23.7984C16.1759 23.8476 15.9986 23.9002 15.8225 23.9558C15.801 23.9626 15.7789 23.9685 15.7573 23.9753C15.5599 24.0386 15.3645 24.1062 15.1703 24.1771C15.1098 24.1992 15.0504 24.2235 14.9902 24.2465C14.8572 24.2971 14.7244 24.3484 14.5932 24.4028C14.5204 24.4328 14.4486 24.4646 14.3763 24.4959C14.2589 24.5467 14.1418 24.598 14.026 24.6515C13.9504 24.6865 13.8756 24.7224 13.8007 24.7586C13.6891 24.8125 13.5784 24.8674 13.4682 24.9239C13.3938 24.962 13.3195 25.0006 13.2458 25.04C13.1355 25.0989 13.0261 25.1596 12.9173 25.2213C12.8471 25.2611 12.7767 25.3006 12.7071 25.3414C12.5928 25.4087 12.4799 25.4783 12.3673 25.5485C12.3059 25.5867 12.2441 25.6239 12.1832 25.663C12.0435 25.7529 11.9056 25.8459 11.769 25.9403C11.7377 25.9618 11.7057 25.9822 11.6746 26.0041C11.5077 26.1212 11.3434 26.2419 11.1814 26.3657C11.1345 26.4015 11.089 26.4392 11.0424 26.4755C10.9283 26.5649 10.8147 26.6547 10.7031 26.7472C10.6438 26.7964 10.5857 26.8472 10.5273 26.8972C10.4303 26.9801 10.3338 27.0636 10.2391 27.1489C10.1779 27.204 10.1178 27.26 10.0575 27.3162C9.96741 27.3999 9.87806 27.4846 9.78993 27.5706C9.73013 27.629 9.67068 27.6878 9.61175 27.7473C9.52466 27.8352 9.43896 27.9244 9.35413 28.0144C9.29799 28.0739 9.24184 28.133 9.18674 28.1935C9.09895 28.2896 9.01308 28.3876 8.92773 28.486C8.87888 28.5423 8.82917 28.598 8.78102 28.6552C8.68037 28.7748 8.58216 28.897 8.48516 29.0199C8.45526 29.0578 8.42414 29.0944 8.39459 29.1327C8.26926 29.2943 8.14723 29.4588 8.02833 29.6258C7.9967 29.6703 7.9668 29.716 7.93568 29.7609C7.84946 29.8848 7.76394 30.0095 7.68137 30.1362C7.63965 30.2003 7.59967 30.2655 7.55882 30.3304C7.48946 30.4404 7.42063 30.5508 7.35405 30.6627C7.31146 30.7342 7.27026 30.8065 7.22889 30.8788C7.16683 30.9871 7.10582 31.0961 7.04637 31.2061C7.00587 31.281 6.96606 31.3565 6.92677 31.4321C6.86924 31.543 6.81326 31.6549 6.75851 31.7674C6.72148 31.8432 6.68463 31.9188 6.64882 31.9953C6.59354 32.1139 6.54052 32.2336 6.4882 32.3539C6.45691 32.4259 6.42475 32.4972 6.39433 32.5698C6.33575 32.7101 6.28047 32.8521 6.22589 32.9947C6.20521 33.0485 6.18313 33.1017 6.16314 33.156C6.16018 33.164 6.15688 33.1716 6.15393 33.1796C3.85329 29.9245 2.60745 26.0349 2.60745 22.0001C2.60745 21.2801 2.02373 20.6964 1.30372 20.6964C0.583721 20.6964 0 21.2801 0 22.0001C0 27.5171 2.05293 32.7948 5.78037 36.861C9.93942 41.3979 15.8514 44 21.9999 44C28.1488 44 34.0606 41.3979 38.2196 36.8608L38.2207 36.8596C41.9476 32.7935 44 27.5164 44 22.0001ZM22.0001 11.8097C25.1551 11.8097 27.722 14.3764 27.722 17.5316C27.722 20.6868 25.1553 23.2536 22.0001 23.2536C18.8449 23.2536 16.2781 20.6868 16.2781 17.5316C16.2781 14.3764 18.8449 11.8097 22.0001 11.8097Z" fill="#045269"/> </svg></div>
                                <span class="name"><?= Yii::t('base', 'Участники'); ?></span>
                            </a>
                        </div>
                        <?= \humhub\modules\space\widgets\Chooser::widget(); ?>
                        <div class="item mobile-close">
                            <a href="<?= Url::to(['/search/search']); ?>">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 41 41" fill="none"> <path d="M16.9877 0C7.63519 0 0.0263672 7.60882 0.0263672 16.9613C0.0263672 26.3138 7.63519 33.9227 16.9877 33.9227C26.3402 33.9227 33.949 26.3138 33.949 16.9613C33.949 7.60882 26.3401 0 16.9877 0ZM16.9877 30.9556C9.27104 30.9556 2.9934 24.678 2.9934 16.9613C2.9934 9.24468 9.27104 2.96703 16.9877 2.96703C24.7039 2.96703 30.982 9.24468 30.982 16.9613C30.982 24.678 24.7044 30.9556 16.9877 30.9556Z" fill="#045269"/> <path d="M39.7461 37.621L28.966 26.8409C28.3864 26.2614 27.4478 26.2614 26.8683 26.8409C26.2887 27.42 26.2887 28.3595 26.8683 28.9386L37.6484 39.7187C37.9382 40.0085 38.3174 40.1533 38.6973 40.1533C39.0771 40.1533 39.4563 40.0085 39.7461 39.7187C40.3256 39.1396 40.3256 38.2001 39.7461 37.621Z" fill="#045269"/> </svg><b class="caret"></b></div>
                                <span class="name"><?= Yii::t('base', 'Поиск'); ?></span>
                            </a>
                        </div>
                    </div>
                    <?php if (Yii::$app->user->isGuest): ?>
                    <?php else: ?>
                        <div class="account" id="account-top-menu" data-menu-id="account-top-menu">
                            <div class="avatar-frame" id="toggle-menu">
                                <div class="avatar toggle-menu" id="account-dropdown-link">
                                    <?= Image::widget([
                                        'user' => $userModel,
                                        'link'  => false,
                                        'width' => 60,
                                        'htmlOptions' => [
                                        'id' => 'user-account-image',
                                    ]])?>
                                </div>
                                <b class="caret"></b>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="account-menu">
                    <?= \humhub\modules\user\widgets\AccountTopMenu::widget(); ?>
                </div>
            </div>
            <div class="pseudo-close mobile-close"></div>
        </div>

        

        <!-- Start content -->
        <?= $content; ?>
        <!-- End content -->

        <?php $this->endBody(); ?>

        <!-- start: js Mods -->
        <script src="<?= $this->theme->getBaseUrl(); ?>/js/CtrlEnterMod.js"></script>
        <!-- end: js Mods -->

    </body>
</html>
<?php $this->endPage() ?>
