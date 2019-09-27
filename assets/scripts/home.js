let images = [{
        'url': './assets/images/img-1.jpg',
        'clickedby': 'https://unsplash.com/@alexanderredl',
        'location': 'Seestadt, Vienna',
        'text': 'Ready to say <span>yes</span>..?'
    },
    {
        'url': './assets/images/img-2.jpg',
        'clickedby': 'https://unsplash.com/@morgan_inspired',
        'location': 'Hanging Rock State Park, Danbury, United States',
        'text': '...and try out something <span>new</span> ?'
    },
    {
        'url': './assets/images/img-3.jpg',
        'clickedby': 'https://unsplash.com/@johnarano',
        'location': 'CrossFit 1855, Ottawa, Canada',
        'text': 'We are here to help <span>you</span> !'
    },
    {
        'url': './assets/images/img-4.jpg',
        'clickedby': 'https://unsplash.com/@gentritbsylejmani',
        'location': 'Prishtina',
        'text': 'Have the best <span>time</span> of your life !'
    },
    {
        'url': './assets/images/img-5.jpg',
        'clickedby': 'https://unsplash.com/@chriskristiansen',
        'location': 'Railay Beach, Thailand',
        'text': 'With exciting <span>offers</span> and loads of <span>fun</span> !'
    }
]

$().ready(function() {
    setInterval(changeElements, 6000);
})
let count = 0;

function changeElements() {
    count = (count + 1) % 5;
    $(".lead").fadeOut(1000, function() {
        $('.img-fluid').fadeOut(800, function() {
            $('.img-fluid').fadeIn(800).attr('src', images[count].url);
            $('.lead').fadeIn(900).html(images[count].text);
        })
    })
}