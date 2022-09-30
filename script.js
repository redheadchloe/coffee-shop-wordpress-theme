const mobileNav = document.querySelector('.hamburger');
const mobileMenu = document.querySelector('.mobile-menu');
mobileNav.addEventListener('click', () => {
    mobileNav.classList.toggle('active');
    mobileMenu.classList.toggle('active');
})

const nav = document.querySelector('nav');
window.addEventListener('scroll', () => {
    if (window.pageYOffset > 20) {
        nav.classList.add('shrinked');
    } else {
        nav.classList.remove('shrinked');
    }
})

// footer get year
const date = document.querySelector('#date');
date.innerHTML = new Date().getFullYear();


// key
const keys = document.querySelectorAll('.key *');
const preloader = document.querySelector('.preloader');
window.addEventListener('DOMContentLoaded', () => {
    preloader.style.display = 'none';
    keys.forEach(key => {
        key.classList.add('active');
    })
})

// to top
const topBtn = document.querySelector('#top');
window.addEventListener('scroll', () => {
    if (window.pageYOffset > 500) {
        topBtn.classList.add('on');
    } else {
        topBtn.classList.remove('on');
    }
})
topBtn.addEventListener('click', () => {
    document.body.scrollTop = 0;
})



const prevBtn = document.querySelector('button:first-of-type');
const nextBtn = document.querySelector('button:last-of-type');
const slides = document.querySelectorAll('.slides');
current = 0;

// hide all slides
reset = () => {
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
    }
}

// display the first slide
slide = () => {
    reset();
    slides[0].style.display = 'flex';
}

left = () => {
    reset();
    slides[current - 1].style.display = 'flex';
    current--;
}
right = () => {
    reset();
    slides[current + 1].style.display = 'flex';
    current++;
}

prevBtn.addEventListener('click', () => {
    if (current === 0) { current = slides.length; };
    left();
})
nextBtn.addEventListener('click', () => {
    if (current === slides.length - 1) { current = - 1 };
    right();
})


slide();




// user testimonial
const voice = [
    {
        'id': '1',
        'text': 'いつもカフェインレスの豆を探してました。お値段も安く、焙煎して時間も経ってなく、コーヒー豆の油分で豆が光沢あって新鮮で美味しいです。夏場はアイスにして飲んでますが、冷やしてもしっかりと味が濃く良い香りがあります。',
        'user': '東京都　40代　女性'
    },
    {
        'id': '2',
        'text': 'アイスコーヒー がまだまだ美味しい季節。スッキリとして酸味があり美味しかった。オススメ！',
        'user': '神奈川　20代　男性'
    },
    {
        'id': '3',
        'text': '生地がきめ細かくしっかりやわらかでボリュームがあり、甘さがしっかりと感じられてとても美味しいです。なんといってもざらめの食感がたまりません。本格カクレープです。他のも試してみたいです。',
        'user': '埼玉　30代　男性'
    },
    {
        'id': '4',
        'text': '甘すぎずコーヒーにちょうどよくて、楽しくいただきました。他の種類も全部制覇したいです！',
        'user': '千葉　10代　女性'
    },
    {
        'id': '5',
        'text': '季節の野菜やお肉を使ったサンドイッチ。食パンが美味しいので不味いはずがないのはもちろん、お店の新鮮な素材の風味が十二分に楽しめる。',
        'user': '東京都　80代　男性'
    },
]

const voiceWrapper = document.querySelector('.voice');
for (let i = 0; i < voice.length; i++) {
    voiceWrapper.innerHTML += `<div class="voice-item text-center flex" id=${voice[i].id}>
    <div class="content p-4">
        <i class="fa-solid fa-quote-left"></i>
        <p class="my-2">${voice[i].text}</p>
        <span>${voice[i].user}</span>
    </div>
</div>`
}

const userBtns = document.querySelectorAll('.user img');
console.log(userBtns);
const userVoices = document.querySelectorAll('.voice-item');



userBtns.forEach(userBtn => {
    userBtn.addEventListener('click', (e) => {
        userBtns.forEach(userBtn => {
            userBtn.classList.remove('active');
        })
        const activeBtn = e.currentTarget.dataset.user;
        e.currentTarget.classList.add('active');
        userVoices.forEach(userVoice => {
            userVoice.style.display = 'none';
        })
        const activeUser = document.getElementById(activeBtn);
        activeUser.style.display = 'flex';
        activeUser.classList.add('active');
    })
})

userBtns[0].click();



// annoucements


const cats = document.querySelectorAll('.ann-item small');
filterCat = () => {
    cats.forEach(cat => {
        switch (cat.dataset.case) {
            case 'products':
                cat.style.background = '#AE8B70';
                break;
            case 'news':
                cat.style.background = '#333';
                break;
            case 'press':
                cat.style.background = 'darkgray';
                break;
        }
    })
}
filterCat();

const annBtns = document.querySelectorAll('.ann-item');
annBtns.forEach(annBtn => {
    annBtn.addEventListener('click', () => {
        annBtn.classList.toggle('active');
        annCon = annBtn.nextElementSibling;
        annCon.classList.toggle('active');
    })
})
