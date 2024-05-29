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
      const animationSpeed = parseInt(textElement.dataset.speed) || 500;
      let delay = 0;

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

          delay += 60;
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
