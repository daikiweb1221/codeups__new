jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  var topBtn = $(".pagetop");
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      300,
      "swing"
    );
    return false;
  });

  //ドロワーメニュー
  $("#MenuButton").click(function () {
    // $(".l-drawer-menu").toggleClass("is-show");
    // $(".p-drawer-menu").toggleClass("is-show");
    $(".js-drawer-open").toggleClass("open");
    $(".drawer-menu").toggleClass("open");
    $("html").toggleClass("is-fixed");
  });

  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(document).on("click", 'a[href*="#"]', function () {
    let time = 400;
    let header = $("header").innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $("html,body").animate({ scrollTop: targetY }, time, "swing");
    return false;
  });

  //スクロールすると上部に固定させるための設定を関数でまとめる
  function FixedAnime() {
    var headerH = $(".js-mv").outerHeight(true);
    var scroll = $(window).scrollTop();
    if (scroll >= headerH) {
      //headerの高さ以上になったら
      $(".js-header").addClass("fixed"); //fixedというクラス名を付与
    } else {
      //それ以外は
      $(".js-header").removeClass("fixed"); //fixedというクラス名を除去
    }
  }
  // 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function () {
    FixedAnime(); /* スクロール途中からヘッダーを出現させる関数を呼ぶ*/
  });

  // ページが読み込まれたらすぐに動かしたい場合の記述
  $(window).on("load", function () {
    FixedAnime(); /* スクロール途中からヘッダーを出現させる関数を呼ぶ*/
  });

  // ハンバーガー
  $(".js-openbtn").click(function () {
    //ボタンがクリックされたら
    $(this).toggleClass("active"); //ボタン自身に activeクラスを付与し
    $(".js-humnav").toggleClass("panelactive"); //ナビゲーションにpanelactiveクラスを付与
  });

  $(".js-humnav a").click(function () {
    //ナビゲーションのリンクがクリックされたら
    $(".js-openbtn").removeClass("active"); //ボタンの activeクラスを除去し
    $(".js-humnav").removeClass("panelactive"); //ナビゲーションのpanelactiveクラスも除去
  });

  //スクロールした際の動きを関数でまとめる
  function PageTopAnime() {
    var scroll = $(window).scrollTop();
    if (scroll >= 200) {
      //上から200pxスクロールしたら
      $(".js-page-top").removeClass("DownMove"); //#page-topについているDownMoveというクラス名を除く
      $(".js-page-top").addClass("UpMove"); //#page-topについているUpMoveというクラス名を付与
    } else {
      if ($(".js-page-top").hasClass("UpMove")) {
        //すでに#page-topにUpMoveというクラス名がついていたら
        $(".js-page-top").removeClass("UpMove"); //UpMoveというクラス名を除き
        $(".js-page-top").addClass("DownMove"); //DownMoveというクラス名を#page-topに付与
      }
    }
  }

  // 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function () {
    PageTopAnime(); /* スクロールした際の動きの関数を呼ぶ*/
  });

  // ページが読み込まれたらすぐに動かしたい場合の記述
  $(window).on("load", function () {
    PageTopAnime(); /* スクロールした際の動きの関数を呼ぶ*/
  });

  // #page-topをクリックした際の設定
  $(".js-page-top a").click(function () {
    $("body,html").animate(
      {
        scrollTop: 0, //ページトップまでスクロール
      },
      500
    ); //ページトップスクロールの速さ。数字が大きいほど遅くなる
    return false; //リンク自体の無効化
  });
});
