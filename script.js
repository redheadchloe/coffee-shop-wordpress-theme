const mobileNav = document.querySelector('.hamburger');
const mobileMenu = document.querySelector('.mobile-menu');
mobileNav.addEventListener('click', () => {
    mobileNav.classList.toggle('active');
    mobileMenu.classList.toggle('active');
})



const news = [
    {
        'img': 'img/new/01.jpeg',
        'name': 'アーモンドミルクラテ',
    },
    {
        'img': 'img/new/02.jpeg',
        'name': 'ほうじ茶ラテ',
    },
    {
        'img': 'img/new/03.jpeg',
        'name': '手作りのアップルパイ',
    },
]

const newWrapper = document.querySelector('.new');
for (let i = 0; i < news.length; i++) {
    newWrapper.innerHTML += `<figure class="slides fade">
    <img src="${news[i].img}" alt>
    <figcaption>${news[i].name}</figcaption>
    </figure>`
}

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
        'img': 'img/voice/voice01.jpeg',
        'text': 'いつもカフェインレスの豆を探してました。お値段も安く、焙煎して時間も経ってなく、コーヒー豆の油分で豆が光沢あって新鮮で美味しいです。夏場はアイスにして飲んでますが、冷やしてもしっかりと味が濃く良い香りがあります。',
        'user': '東京都　40代　女性'
    },
    {
        'id': '2',
        'img': 'img/voice/voice02.jpeg',
        'text': 'アイスコーヒー がまだまだ美味しい季節。スッキリとして酸味があり美味しかった。オススメ！',
        'user': '神奈川　20代　男性'
    },
    {
        'id': '3',
        'img': 'img/voice/voice03.jpeg',
        'text': '生地がきめ細かくしっかりやわらかでボリュームがあり、甘さがしっかりと感じられてとても美味しいです。なんといってもざらめの食感がたまりません。本格カクレープです。他のも試してみたいです。',
        'user': '埼玉　30代　男性'
    },
    {
        'id': '4',
        'img': 'img/voice/voice04.jpeg',
        'text': '甘すぎずコーヒーにちょうどよくて、楽しくいただきました。他の種類も全部制覇したいです！',
        'user': '千葉　10代　女性'
    },
    {
        'id': '5',
        'img': 'img/voice/voice05.jpeg',
        'text': '季節の野菜やお肉を使ったサンドイッチ。食パンが美味しいので不味いはずがないのはもちろん、お店の新鮮な素材の風味が十二分に楽しめる。',
        'user': '東京都　80代　男性'
    },
]

const voiceWrapper = document.querySelector('.voice');
for (let i = 0; i < voice.length; i++) {
    voiceWrapper.innerHTML += `<div class="voice-item text-center flex" id=${voice[i].id}>
    <img src="${voice[i].img}" alt="">
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

anns = [
    {
        'date': '2022.08.08',
        'cat': 'お知らせ',
        'case': 'anns',
        'title': '夏期休業のお知らせ',
        'content': '平素より弊社サービスをご愛顧いただき、誠にありがとうございます。<br>下記の期間は夏期休業とさせていただきます。<br>【休業期間】<br>22022年8月11日（木）～2022年8月15日（月）<br>お客様にはご不便をおかけいたしますが、何卒ご了承くださいますようお願い申し上げます。'
    },
    {
        'date': '2022.06.17',
        'cat': 'コーヒー',
        'case': 'news',
        'title': 'ローストお試しセット',
        'content': '初めての方におすすめ、同じコーヒー豆をローストの度合いを変えて4種類ご用意したのが「ローストお試しセット」をはじめました。'
    },
    {
        'date': '2022.04.29',
        'cat': 'お知らせ',
        'case': 'anns',
        'title': 'ゴールデンウィーク休業のお知らせ',
        'content': '平素より弊社サービスをご愛顧いただき、誠にありがとうございます。<br>下記の期間はゴールデンウィーク休業とさせていただきます。<br>【休業期間】<br>2022年5月1日(日)～2022年5月5日(木) <br>お客様にはご不便をおかけいたしますが、何卒ご了承くださいますようお願い申し上げます。'
    },
    {
        'date': '2022.04.02',
        'cat': 'メディア掲載',
        'case': 'press',
        'title': '「Standart Japan」に掲載されました',
        'content': 'コーヒー界の専門紙「Standart Japan」2021年4月1日号（第752号）に弊店記事が掲載されました。'
    },
]

const annItem = document.querySelector('.ann-wrapper');
for (let i = 0; i < anns.length; i++) {
    annItem.innerHTML += `<ul class="ann-item grid-4">
    <li>
        <time>${anns[i].date}</time>
    </li>
    <li>
        <small data-case="${anns[i].case}">${anns[i].cat}</small>
    </li>
    <li>${anns[i].title}</li>
    <li><i class="fa-solid fa-angle-right"></i></li>
</ul>
<ul class="content py-1">
    <li>
        <small>${anns[i].content}</small>
    </li>
</ul>`
}

const cats = document.querySelectorAll('.ann-item small');
filterCat = () => {
    cats.forEach(cat => {
        switch (cat.dataset.case) {
            case 'news':
                cat.style.background = '#AE8B70';
                break;
            case 'anns':
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