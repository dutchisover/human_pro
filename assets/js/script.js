////////////////// URLを取得し、リンクをハイライトする //////////////////
document.addEventListener('DOMContentLoaded', () => {
  const currentURL = window.location.pathname;

  const navItems = document.querySelectorAll('.header__nav-item');

  navItems.forEach(item => {
    const anchor = item.querySelector('a');
    if (
      anchor &&
      anchor.dataset.current &&
      currentURL.includes(anchor.dataset.current)
    ) {
      item.classList.add('is-current');
    }
  });
});

////////////////// メニュークリックでヘッダーを開きボディにオーバーフローを付与 //////////////////
document.addEventListener('DOMContentLoaded', () => {
  const menuButton = document.querySelector('.header__menu');
  const closeButton = document.querySelector('.header__menu-close');

  if (menuButton) {
    menuButton.addEventListener('click', () => {
      const header = document.querySelector('.header');
      if (header) {
        header.classList.toggle('is-open');
      }
      document.body.classList.add('is-overflow');
    });
  }

  if (closeButton) {
    closeButton.addEventListener('click', () => {
      const header = document.querySelector('.header');
      if (header) {
        header.classList.remove('is-open');
      }
      document.body.classList.remove('is-overflow');
    });
  }
});

////////////////// 文字を1文字ずつフワッと表示する //////////////////

document.addEventListener('DOMContentLoaded', () => {
  const textElements = document.querySelectorAll('.fade-in-text');

  textElements.forEach(textElement => {
    if (textElement) {
      const text = textElement.textContent;
      textElement.textContent = '';
      const startDelay = parseInt(textElement.dataset.delay) || 0;
      const animationSpeed = parseInt(textElement.dataset.speed) || 1000;
      let delay = 100;

      setTimeout(() => {
        text.split('').forEach(char => {
          const span = document.createElement('span');
          span.textContent = char;
          span.style.opacity = 0;
          span.style.transition = `opacity ${animationSpeed}ms`;
          textElement.appendChild(span);

          setTimeout(() => {
            span.style.opacity = 1;
          }, delay);

          delay += 150;
        });
      }, startDelay);
    }
  });
});

////////////////// .section__titleが表示された時に親に.is-showを付与 //////////////////

// GSAPのScrollTriggerを使用してアニメーションを作成する
gsap.registerPlugin(ScrollTrigger);

// .section__title要素をすべて取得
const sectionTitles = document.querySelectorAll('.section__title');

sectionTitles.forEach(title => {
  // ScrollTriggerの設定
  ScrollTrigger.create({
    trigger: title,
    start: 'top 95%', // トリガーが画面に75%表示されたときに発動
    onEnter: () => {
      const parentSection = title.closest('.section');
      if (parentSection) {
        parentSection.classList.add('is-show');
      }
    }
  });
});

////////////////// アニメーション終了後クラス追加 //////////////////

document.addEventListener('DOMContentLoaded', () => {
  const heroButtons = document.querySelectorAll('.hero__button');

  heroButtons.forEach(button => {
    button.addEventListener('animationend', () => {
      if (!button.classList.contains('is-animated')) {
        button.classList.add('is-animated');
      }
    });
  });
});

////////////////// スクロール位置に応じてクラスを付与 //////////////////

gsap.registerPlugin(ScrollTrigger);

gsap.to(document.body, {
  scrollTrigger: {
    trigger: document.body,
    start: 'top -100px',
    end: 'bottom +100px',
    onEnter: () => document.body.classList.add('is-cvshow'),
    onLeaveBack: () => document.body.classList.remove('is-cvshow'),
    onEnterBack: () => document.body.classList.add('is-cvshow'),
    onLeave: () => document.body.classList.remove('is-cvshow')
  }
});

////////////////// アコーディオンをトグルする //////////////////
document.addEventListener('DOMContentLoaded', () => {
  const accordions = document.querySelectorAll('.js_accordion');

  accordions.forEach(accordion => {
    accordion.addEventListener('click', () => {
      accordion.classList.toggle('is-open');
    });
  });
});

document.addEventListener('DOMContentLoaded', function() {
  // チェックボックスの状態を確認してボタンの状態を更新する関数
  function updateButtonState() {
    const checkboxes = document.querySelectorAll(
      '.form__check input[type="checkbox"]'
    );
    const button = document.querySelector('.button--submit');

    // ボタンが存在するか確認
    if (!button) {
      // console.error('Button with class .button--submit not found.');
      return;
    }

    // チェックされているチェックボックスが1つでもあるかどうかを確認
    const isChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);

    // チェックされている場合は .is-disabled を削除し、されていない場合は追加
    if (isChecked) {
      button.classList.remove('is-disabled');
    } else {
      button.classList.add('is-disabled');
    }
  }

  // 初期状態を設定
  updateButtonState();

  // チェックボックスの状態が変更されたときにボタンの状態を更新
  const checkboxes = document.querySelectorAll(
    '.form__check input[type="checkbox"]'
  );
  checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', updateButtonState);
  });
});

////////////////// aタグのスムーズスクロール //////////////////
document.addEventListener('DOMContentLoaded', () => {
  const anchors = document.querySelectorAll('a[href^="#"]');
  const duration = 400; // スクロールの到達時間をミリ秒で設定
  const offset = '100rem'; // スクロール位置をトップから調整するオフセット値（単位付き）

  const getOffsetInPixels = offset => {
    const value = parseFloat(offset);
    const unit = offset.match(/[a-zA-Z%]+$/);
    if (!unit) return value;

    switch (unit[0]) {
      case 'rem':
        return (
          value *
          parseFloat(getComputedStyle(document.documentElement).fontSize)
        );
      case 'em':
        return value * parseFloat(getComputedStyle(document.body).fontSize);
      case 'px':
        return value;
      case '%':
        return value / 100 * window.innerHeight;
      default:
        return value;
    }
  };

  const offsetInPixels = getOffsetInPixels(offset);

  anchors.forEach(anchor => {
    anchor.addEventListener('click', e => {
      const targetId = anchor.getAttribute('href').substring(1);
      const targetElement = document.getElementById(targetId);
      if (targetElement) {
        e.preventDefault();
        const startPosition = window.pageYOffset;
        const targetPosition =
          targetElement.getBoundingClientRect().top - offsetInPixels;
        const startTime = performance.now();

        const animateScroll = currentTime => {
          const elapsedTime = currentTime - startTime;
          const progress = Math.min(elapsedTime / duration, 1);
          window.scrollTo(0, startPosition + targetPosition * progress);
          if (progress < 1) {
            requestAnimationFrame(animateScroll);
          }
        };

        requestAnimationFrame(animateScroll);
      }
    });
  });
});
