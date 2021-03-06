# TvShows management

APIs for managing TvShows

## List all available TV Shows




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/api/shows?lastId=10" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1" \
    -H "X-Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/api/shows"
);

let params = {
    "lastId": "10",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
    "X-Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "id": 11,
        "url": "https:\/\/www.tvmaze.com\/shows\/11\/gotham",
        "name": "Gotham",
        "type": "Scripted",
        "language": "English",
        "genres": [
            "Drama",
            "Action",
            "Crime"
        ],
        "status": "Ended",
        "runtime": 60,
        "premiered": "2014-09-22",
        "officialSite": "http:\/\/www.fox.com\/gotham",
        "schedule": {
            "time": "20:00",
            "days": [
                "Thursday"
            ]
        },
        "rating": {
            "average": 7.7
        },
        "weight": 94,
        "network": {
            "id": 4,
            "name": "FOX",
            "country": {
                "name": "United States",
                "code": "US",
                "timezone": "America\/New_York"
            }
        },
        "webChannel": null,
        "externals": {
            "tvrage": 38049,
            "thetvdb": 274431,
            "imdb": "tt3749900"
        },
        "image": {
            "medium": "https:\/\/static.tvmaze.com\/uploads\/images\/medium_portrait\/189\/474715.jpg",
            "original": "https:\/\/static.tvmaze.com\/uploads\/images\/original_untouched\/189\/474715.jpg"
        },
        "summary": "<p>The good. The evil. The beginning.<\/p><p>Everyone knows the name Commissioner Gordon. He is one of the crime world's greatest foes, a man whose reputation is synonymous with law and order. But what is known of Gordon's story and his rise from rookie detective to Police Commissioner? What did it take to navigate the multiple layers of corruption that secretly ruled Gotham City, the spawning ground of the world's most iconic villains? And what circumstances created them – the larger-than-life personas who would become Catwoman, The Penguin, The Riddler, Two-Face and The Joker?<\/p><p><b>Gotham <\/b>is an origin story of the great DC Comics Super-Villains and vigilantes, revealing an entirely new chapter that has never been told. It follows one cop's rise through a dangerously corrupt city teetering between good and evil, and chronicles the birth of one of the most popular super heroes of our time.<\/p>",
        "updated": 1606329975,
        "_links": {
            "self": {
                "href": "https:\/\/api.tvmaze.com\/shows\/11"
            },
            "previousepisode": {
                "href": "https:\/\/api.tvmaze.com\/episodes\/1616387"
            }
        }
    },
    {
        "id": 12,
        "url": "https:\/\/www.tvmaze.com\/shows\/12\/lost-girl",
        "name": "Lost Girl",
        "type": "Scripted",
        "language": "English",
        "genres": [
            "Drama",
            "Fantasy",
            "Horror"
        ],
        "status": "Ended",
        "runtime": 60,
        "premiered": "2010-09-12",
        "officialSite": "http:\/\/www.showcase.ca\/lostgirl",
        "schedule": {
            "time": "22:00",
            "days": [
                "Sunday"
            ]
        },
        "rating": {
            "average": 8.1
        },
        "weight": 95,
        "network": {
            "id": 6,
            "name": "Showcase",
            "country": {
                "name": "Canada",
                "code": "CA",
                "timezone": "America\/Halifax"
            }
        },
        "webChannel": null,
        "externals": {
            "tvrage": 26401,
            "thetvdb": 182061,
            "imdb": "tt1429449"
        },
        "image": {
            "medium": "https:\/\/static.tvmaze.com\/uploads\/images\/medium_portrait\/0\/137.jpg",
            "original": "https:\/\/static.tvmaze.com\/uploads\/images\/original_untouched\/0\/137.jpg"
        },
        "summary": "<p><b>Lost Girl<\/b> follows supernatural seductress Bo, a Succubus who feeds on the sexual energy of humans. Growing up with human parents, Bo had no reason to believe she was anything other than the girl next door — until she drained her boyfriend to death in their first sexual encounter. Now she has hit the road alone and afraid. <br \/> She discovers she is one of the Fae, creatures of legend and folklore, who pass as humans while feeding off them secretly and in different ways, as they have for millennia. Relieved yet horrified to find out that she is not alone, Bo decides to take the middle path between the humans and the Fae while embarking on a personal mission to unlock the secrets of her origin.<\/p><p>With the help of her human sidekick, Kenzi, and Dyson, a sexy police detective, Bo takes on a challenge every week helping a Fae or human client who comes to her to solve a mystery, or to right a wrong.<\/p>",
        "updated": 1587112172,
        "_links": {
            "self": {
                "href": "https:\/\/api.tvmaze.com\/shows\/12"
            },
            "previousepisode": {
                "href": "https:\/\/api.tvmaze.com\/episodes\/316120"
            }
        }
    },
    {
        "id": 13,
        "url": "https:\/\/www.tvmaze.com\/shows\/13\/the-flash",
        "name": "The Flash",
        "type": "Scripted",
        "language": "English",
        "genres": [
            "Drama",
            "Action",
            "Science-Fiction"
        ],
        "status": "Running",
        "runtime": 60,
        "premiered": "2014-10-07",
        "officialSite": "http:\/\/www.cwtv.com\/shows\/the-flash\/",
        "schedule": {
            "time": "20:00",
            "days": [
                "Tuesday"
            ]
        },
        "rating": {
            "average": 7.9
        },
        "weight": 99,
        "network": {
            "id": 5,
            "name": "The CW",
            "country": {
                "name": "United States",
                "code": "US",
                "timezone": "America\/New_York"
            }
        },
        "webChannel": null,
        "externals": {
            "tvrage": 36939,
            "thetvdb": 279121,
            "imdb": "tt3107288"
        },
        "image": {
            "medium": "https:\/\/static.tvmaze.com\/uploads\/images\/medium_portrait\/296\/740329.jpg",
            "original": "https:\/\/static.tvmaze.com\/uploads\/images\/original_untouched\/296\/740329.jpg"
        },
        "summary": "<p>After a particle accelerator causes a freak storm, CSI Investigator Barry Allen is struck by lightning and falls into a coma. Months later he awakens with the power of super speed, granting him the ability to move through Central City like an unseen guardian angel. Though initially excited by his newfound powers, Barry is shocked to discover he is not the only \"meta-human\" who was created in the wake of the accelerator explosion -- and not everyone is using their new powers for good. Barry partners with S.T.A.R. Labs and dedicates his life to protect the innocent. For now, only a few close friends and associates know that Barry is literally the fastest man alive, but it won't be long before the world learns what Barry Allen has become...The Flash!<\/p>",
        "updated": 1613761156,
        "_links": {
            "self": {
                "href": "https:\/\/api.tvmaze.com\/shows\/13"
            },
            "previousepisode": {
                "href": "https:\/\/api.tvmaze.com\/episodes\/1808699"
            },
            "nextepisode": {
                "href": "https:\/\/api.tvmaze.com\/episodes\/1960530"
            }
        }
    },
    {
        "id": 14,
        "url": "https:\/\/www.tvmaze.com\/shows\/14\/continuum",
        "name": "Continuum",
        "type": "Scripted",
        "language": "English",
        "genres": [
            "Drama",
            "Crime",
            "Science-Fiction"
        ],
        "status": "Ended",
        "runtime": 60,
        "premiered": "2012-05-27",
        "officialSite": "http:\/\/www.showcase.ca\/Continuum",
        "schedule": {
            "time": "21:00",
            "days": [
                "Sunday"
            ]
        },
        "rating": {
            "average": 8.2
        },
        "weight": 95,
        "network": {
            "id": 6,
            "name": "Showcase",
            "country": {
                "name": "Canada",
                "code": "CA",
                "timezone": "America\/Halifax"
            }
        },
        "webChannel": null,
        "externals": {
            "tvrage": 30789,
            "thetvdb": 258171,
            "imdb": "tt1954347"
        },
        "image": {
            "medium": "https:\/\/static.tvmaze.com\/uploads\/images\/medium_portrait\/0\/184.jpg",
            "original": "https:\/\/static.tvmaze.com\/uploads\/images\/original_untouched\/0\/184.jpg"
        },
        "summary": "<p><b>Continuum <\/b>is a one-hour police drama centered on Kiera Cameron, a regular cop from 65 years in the future who finds herself trapped in present day Vancouver. She is alone, a stranger in a strange land, and has eight of the most ruthless criminals from the future, known as Liber8, loose in the city.<\/p><p>Lucky for Kiera, through the use of her CMR (cellular memory recall), a futuristic liquid chip technology implanted in her brain, she connects with Alec Sadler, a seventeen-year-old tech genius. When Kiera calls and Alec answers, a very unique partnership begins.<\/p><p>Kiera's first desire is to get \"home.\" But until she figures out a way to do that, she must survive in our time period and use all the resources available to her to track and capture the terrorists before they alter history enough to change the course of the future. After all, what's the point of going back if the future isn't the one you left?<\/p>",
        "updated": 1573153509,
        "_links": {
            "self": {
                "href": "https:\/\/api.tvmaze.com\/shows\/14"
            },
            "previousepisode": {
                "href": "https:\/\/api.tvmaze.com\/episodes\/228308"
            }
        }
    },
    {
        "id": 15,
        "url": "https:\/\/www.tvmaze.com\/shows\/15\/constantine",
        "name": "Constantine",
        "type": "Scripted",
        "language": "English",
        "genres": [
            "Drama",
            "Action",
            "Horror"
        ],
        "status": "Ended",
        "runtime": 60,
        "premiered": "2014-10-24",
        "officialSite": "https:\/\/www.nbc.com\/constantine",
        "schedule": {
            "time": "20:00",
            "days": [
                "Friday"
            ]
        },
        "rating": {
            "average": 7.5
        },
        "weight": 83,
        "network": {
            "id": 1,
            "name": "NBC",
            "country": {
                "name": "United States",
                "code": "US",
                "timezone": "America\/New_York"
            }
        },
        "webChannel": null,
        "externals": {
            "tvrage": 38109,
            "thetvdb": 273690,
            "imdb": "tt3489184"
        },
        "image": {
            "medium": "https:\/\/static.tvmaze.com\/uploads\/images\/medium_portrait\/0\/154.jpg",
            "original": "https:\/\/static.tvmaze.com\/uploads\/images\/original_untouched\/0\/154.jpg"
        },
        "summary": "<p>Based on the wildly popular comic book series \"Hellblazer\" from DC Comics, seasoned demon hunter and master of the occult John Constantine is armed with a ferocious knowledge of the dark arts and a wickedly naughty wit. He fights the good fight - or at least he did. With his soul already damned to hell, he's decided to abandon his campaign against evil until a series of events thrusts him back into the fray, and he'll do whatever it takes to protect the innocent. With the balance of good and evil on the line‎, <b>Constantine <\/b>will use his skills to travel the country, find the supernatural terrors that threaten our world and send them back where they belong. After that, who knows... maybe there's hope for him and his soul after all.<\/p>",
        "updated": 1603789444,
        "_links": {
            "self": {
                "href": "https:\/\/api.tvmaze.com\/shows\/15"
            },
            "previousepisode": {
                "href": "https:\/\/api.tvmaze.com\/episodes\/122719"
            }
        }
    },
    {
        "id": 16,
        "url": "https:\/\/www.tvmaze.com\/shows\/16\/penny-dreadful",
        "name": "Penny Dreadful",
        "type": "Scripted",
        "language": "English",
        "genres": [
            "Horror",
            "Thriller",
            "Supernatural"
        ],
        "status": "Ended",
        "runtime": 60,
        "premiered": "2014-05-11",
        "officialSite": "http:\/\/www.sho.com\/penny-dreadful",
        "schedule": {
            "time": "21:00",
            "days": [
                "Sunday"
            ]
        },
        "rating": {
            "average": 8.3
        },
        "weight": 89,
        "network": {
            "id": 9,
            "name": "Showtime",
            "country": {
                "name": "United States",
                "code": "US",
                "timezone": "America\/New_York"
            }
        },
        "webChannel": null,
        "externals": {
            "tvrage": 34172,
            "thetvdb": 265766,
            "imdb": "tt2628232"
        },
        "image": {
            "medium": "https:\/\/static.tvmaze.com\/uploads\/images\/medium_portrait\/48\/122237.jpg",
            "original": "https:\/\/static.tvmaze.com\/uploads\/images\/original_untouched\/48\/122237.jpg"
        },
        "summary": "<p>Some of literature's most terrifying characters, including Dr. Frankenstein and his monster, Dorian Gray, and iconic figures from the novel Dracula are lurking in the darkest corners of Victorian London. They are joined by a core of original characters in a complex, frightening new narrative. <b>Penny Dreadful <\/b>is a psychological thriller filled with dark mystery and suspense, where personal demons from the past can be stronger than vampires, evil spirits and immortal beasts.<\/p>",
        "updated": 1602049308,
        "_links": {
            "self": {
                "href": "https:\/\/api.tvmaze.com\/shows\/16"
            },
            "previousepisode": {
                "href": "https:\/\/api.tvmaze.com\/episodes\/766196"
            }
        }
    },
    {
        "id": 18,
        "url": "https:\/\/www.tvmaze.com\/shows\/18\/the-amazing-race",
        "name": "The Amazing Race",
        "type": "Reality",
        "language": "English",
        "genres": [
            "Action",
            "Adventure",
            "Family"
        ],
        "status": "Running",
        "runtime": 60,
        "premiered": "2001-09-05",
        "officialSite": "http:\/\/www.cbs.com\/shows\/amazing_race\/",
        "schedule": {
            "time": "20:00",
            "days": [
                "Wednesday"
            ]
        },
        "rating": {
            "average": 7.8
        },
        "weight": 94,
        "network": {
            "id": 2,
            "name": "CBS",
            "country": {
                "name": "United States",
                "code": "US",
                "timezone": "America\/New_York"
            }
        },
        "webChannel": null,
        "externals": {
            "tvrage": 5566,
            "thetvdb": 77666,
            "imdb": "tt0285335"
        },
        "image": {
            "medium": "https:\/\/static.tvmaze.com\/uploads\/images\/medium_portrait\/237\/592579.jpg",
            "original": "https:\/\/static.tvmaze.com\/uploads\/images\/original_untouched\/237\/592579.jpg"
        },
        "summary": "<p>From athletes and actors to tattoo artists, social workers and musicians - a diverse mix of teams will need to utilize their street smarts and savvy know-how to compete in the race of their lifetime.<\/p>",
        "updated": 1613850245,
        "_links": {
            "self": {
                "href": "https:\/\/api.tvmaze.com\/shows\/18"
            },
            "previousepisode": {
                "href": "https:\/\/api.tvmaze.com\/episodes\/1972370"
            }
        }
    },
    {
        "id": 19,
        "url": "https:\/\/www.tvmaze.com\/shows\/19\/supernatural",
        "name": "Supernatural",
        "type": "Scripted",
        "language": "English",
        "genres": [
            "Drama",
            "Action",
            "Supernatural"
        ],
        "status": "Ended",
        "runtime": 60,
        "premiered": "2005-09-13",
        "officialSite": "http:\/\/www.cwtv.com\/shows\/supernatural",
        "schedule": {
            "time": "20:00",
            "days": [
                "Thursday"
            ]
        },
        "rating": {
            "average": 8.4
        },
        "weight": 98,
        "network": {
            "id": 5,
            "name": "The CW",
            "country": {
                "name": "United States",
                "code": "US",
                "timezone": "America\/New_York"
            }
        },
        "webChannel": null,
        "externals": {
            "tvrage": 5410,
            "thetvdb": 78901,
            "imdb": "tt0460681"
        },
        "image": {
            "medium": "https:\/\/static.tvmaze.com\/uploads\/images\/medium_portrait\/268\/672051.jpg",
            "original": "https:\/\/static.tvmaze.com\/uploads\/images\/original_untouched\/268\/672051.jpg"
        },
        "summary": "<p>This haunting series follows the Winchester brothers as they crisscross the lonely and mysterious back roads of the country in their '67 Chevy Impala, hunting down every evil supernatural force they encounter along the way.<\/p>",
        "updated": 1613252813,
        "_links": {
            "self": {
                "href": "https:\/\/api.tvmaze.com\/shows\/19"
            },
            "previousepisode": {
                "href": "https:\/\/api.tvmaze.com\/episodes\/1753661"
            }
        }
    },
    {
        "id": 20,
        "url": "https:\/\/www.tvmaze.com\/shows\/20\/the-strain",
        "name": "The Strain",
        "type": "Scripted",
        "language": "English",
        "genres": [
            "Drama",
            "Horror",
            "Thriller"
        ],
        "status": "Ended",
        "runtime": 60,
        "premiered": "2014-07-13",
        "officialSite": "http:\/\/www.fxnetworks.com\/thestrain",
        "schedule": {
            "time": "22:00",
            "days": [
                "Sunday"
            ]
        },
        "rating": {
            "average": 7.5
        },
        "weight": 93,
        "network": {
            "id": 13,
            "name": "FX",
            "country": {
                "name": "United States",
                "code": "US",
                "timezone": "America\/New_York"
            }
        },
        "webChannel": null,
        "externals": {
            "tvrage": 33229,
            "thetvdb": 276564,
            "imdb": "tt2654620"
        },
        "image": {
            "medium": "https:\/\/static.tvmaze.com\/uploads\/images\/medium_portrait\/70\/175363.jpg",
            "original": "https:\/\/static.tvmaze.com\/uploads\/images\/original_untouched\/70\/175363.jpg"
        },
        "summary": "<p><b>The Strain<\/b> is a high-concept thriller that tells the story of Dr. Ephraim Goodweather, the head of the Center for Disease Control Canary Team in New York City. He and his team are called upon to investigate a mysterious viral outbreak with hallmarks of an ancient and evil strain of vampirism. As the strain spreads, Goodweather, his team, and an assembly of everyday New Yorkers wage war for the fate of humanity itself.<\/p>",
        "updated": 1604405184,
        "_links": {
            "self": {
                "href": "https:\/\/api.tvmaze.com\/shows\/20"
            },
            "previousepisode": {
                "href": "https:\/\/api.tvmaze.com\/episodes\/1128366"
            }
        }
    },
    {
        "id": 21,
        "url": "https:\/\/www.tvmaze.com\/shows\/21\/the-last-ship",
        "name": "The Last Ship",
        "type": "Scripted",
        "language": "English",
        "genres": [
            "Drama",
            "Action",
            "Thriller"
        ],
        "status": "Ended",
        "runtime": 60,
        "premiered": "2014-06-22",
        "officialSite": "http:\/\/www.tntdrama.com\/shows\/the-last-ship",
        "schedule": {
            "time": "21:00",
            "days": [
                "Sunday"
            ]
        },
        "rating": {
            "average": 7.6
        },
        "weight": 93,
        "network": {
            "id": 14,
            "name": "TNT",
            "country": {
                "name": "United States",
                "code": "US",
                "timezone": "America\/New_York"
            }
        },
        "webChannel": null,
        "externals": {
            "tvrage": 33158,
            "thetvdb": 269533,
            "imdb": "tt2402207"
        },
        "image": {
            "medium": "https:\/\/static.tvmaze.com\/uploads\/images\/medium_portrait\/164\/412464.jpg",
            "original": "https:\/\/static.tvmaze.com\/uploads\/images\/original_untouched\/164\/412464.jpg"
        },
        "summary": "<p>Their mission is simple: Find a cure. Stop the virus. Save the world. When a global pandemic wipes out eighty percent of the planet's population, the crew of a lone and unaffected Navy destroyer, the USS Nathan James, must find a way to pull humanity from the brink of extinction.<\/p>",
        "updated": 1612543190,
        "_links": {
            "self": {
                "href": "https:\/\/api.tvmaze.com\/shows\/21"
            },
            "previousepisode": {
                "href": "https:\/\/api.tvmaze.com\/episodes\/1383245"
            }
        }
    },
    {
        "id": 22,
        "url": "https:\/\/www.tvmaze.com\/shows\/22\/true-blood",
        "name": "True Blood",
        "type": "Scripted",
        "language": "English",
        "genres": [
            "Drama",
            "Romance",
            "Supernatural"
        ],
        "status": "Ended",
        "runtime": 60,
        "premiered": "2008-09-07",
        "officialSite": "http:\/\/www.hbo.com\/true-blood",
        "schedule": {
            "time": "21:00",
            "days": [
                "Sunday"
            ]
        },
        "rating": {
            "average": 7.9
        },
        "weight": 91,
        "network": {
            "id": 8,
            "name": "HBO",
            "country": {
                "name": "United States",
                "code": "US",
                "timezone": "America\/New_York"
            }
        },
        "webChannel": null,
        "externals": {
            "tvrage": 12662,
            "thetvdb": 82283,
            "imdb": "tt0844441"
        },
        "image": {
            "medium": "https:\/\/static.tvmaze.com\/uploads\/images\/medium_portrait\/236\/590987.jpg",
            "original": "https:\/\/static.tvmaze.com\/uploads\/images\/original_untouched\/236\/590987.jpg"
        },
        "summary": "<p><b>True Blood <\/b>is a horror\/drama based on a series of novels called <i>The Southern American Vampires Mysteries<\/i>. It focuses on Sookie Stackhouse and her various encounters with vampires and other supernatural beings. The show is centred in the small town of Bon Temps in Louisiana. The show focuses heavily on the co-existence of humans with vampires. The show also touches on several other controversial issues involving equal rights, violence, discrimination and religion.<\/p>",
        "updated": 1607550453,
        "_links": {
            "self": {
                "href": "https:\/\/api.tvmaze.com\/shows\/22"
            },
            "previousepisode": {
                "href": "https:\/\/api.tvmaze.com\/episodes\/1292"
            }
        }
    },
    {
        "id": 23,
        "url": "https:\/\/www.tvmaze.com\/shows\/23\/once-upon-a-time-in-wonderland",
        "name": "Once Upon a Time in Wonderland",
        "type": "Scripted",
        "language": "English",
        "genres": [
            "Drama",
            "Adventure",
            "Fantasy"
        ],
        "status": "Ended",
        "runtime": 60,
        "premiered": "2013-10-10",
        "officialSite": null,
        "schedule": {
            "time": "20:00",
            "days": [
                "Thursday"
            ]
        },
        "rating": {
            "average": 6.7
        },
        "weight": 55,
        "network": {
            "id": 3,
            "name": "ABC",
            "country": {
                "name": "United States",
                "code": "US",
                "timezone": "America\/New_York"
            }
        },
        "webChannel": null,
        "externals": {
            "tvrage": 35215,
            "thetvdb": 269654,
            "imdb": "tt2802008"
        },
        "image": {
            "medium": "https:\/\/static.tvmaze.com\/uploads\/images\/medium_portrait\/73\/183661.jpg",
            "original": "https:\/\/static.tvmaze.com\/uploads\/images\/original_untouched\/73\/183661.jpg"
        },
        "summary": "<p>In Victorian England, the young and beautiful Alice tells a tale of a strange new land that exists on the other side of a rabbit hole. An invisible cat, a hookah smoking caterpillar and playing-cards that talk are just some of the fantastic things she's seen during this impossible adventure. Surely this troubled girl must be insane, and her doctors aim to cure her with a treatment that will make her forget everything. Alice seems ready to put it all behind her, especially the painful memory of the genie she fell in love with and lost forever -- the handsome and mysterious Cyrus . But deep down Alice knows this world is real, and just in the nick of time the sardonic Knave of Hearts and the irrepressible White Rabbit arrive to save her from a doomed fate. Together the trio will take a tumble down the rabbit hole to this Wonderland where nothing is impossible.<\/p>",
        "updated": 1606705379,
        "_links": {
            "self": {
                "href": "https:\/\/api.tvmaze.com\/shows\/23"
            },
            "previousepisode": {
                "href": "https:\/\/api.tvmaze.com\/episodes\/1313"
            }
        }
    },
    {
        "id": 24,
        "url": "https:\/\/www.tvmaze.com\/shows\/24\/hawaii-five-0",
        "name": "Hawaii Five-0",
        "type": "Scripted",
        "language": "English",
        "genres": [
            "Drama",
            "Action",
            "Crime"
        ],
        "status": "Ended",
        "runtime": 60,
        "premiered": "2010-09-20",
        "officialSite": "http:\/\/www.cbs.com\/shows\/hawaii_five_0\/",
        "schedule": {
            "time": "21:00",
            "days": [
                "Friday"
            ]
        },
        "rating": {
            "average": 7.6
        },
        "weight": 98,
        "network": {
            "id": 2,
            "name": "CBS",
            "country": {
                "name": "United States",
                "code": "US",
                "timezone": "America\/New_York"
            }
        },
        "webChannel": null,
        "externals": {
            "tvrage": 24840,
            "thetvdb": 164541,
            "imdb": "tt1600194"
        },
        "image": {
            "medium": "https:\/\/static.tvmaze.com\/uploads\/images\/medium_portrait\/213\/532575.jpg",
            "original": "https:\/\/static.tvmaze.com\/uploads\/images\/original_untouched\/213\/532575.jpg"
        },
        "summary": "<p><b>Hawaii Five-0<\/b> is a contemporary take on the classic series about a new elite federalized task force whose mission is to wipe out the crime that washes up on the Islands' sun-drenched beaches. Detective Steve McGarrett, a decorated Naval officer-turned-cop, returned to Oahu to investigate his father's murder and stayed after Hawaii's former governor persuaded him to head up the new team: his rules, no red tape and full blanket authority to hunt down the biggest \"game\" in town. Joining McGarrett is Detective Danny \"Danno\" Williams, a relocated ex-New Jersey cop - a working man in paradise who prefers skyscrapers to the coastline - but who's committed to keeping the Islands safe for his young daughter; Chin Ho Kelly, an ex-Honolulu police detective and former protégé of McGarrett's father who was wrongly accused of corruption; Dr. Max Bergman, the quirky coroner; Chin's cousin, Kono Kalakaua, a beautiful and fearless native; and Captain Lou Grover, who formerly headed Hawaii's SWAT unit. Joining them is Jerry Ortega, a former classmate of Chin's and the Island's local conspiracy theorist. The state's brash FIVE-0 unit, who may spar and jest among themselves, remain determined to eliminate the seedy elements from the 50th state.<\/p>",
        "updated": 1604847206,
        "_links": {
            "self": {
                "href": "https:\/\/api.tvmaze.com\/shows\/24"
            },
            "previousepisode": {
                "href": "https:\/\/api.tvmaze.com\/episodes\/1809248"
            }
        }
    },
    {
        "id": 25,
        "url": "https:\/\/www.tvmaze.com\/shows\/25\/hellsing",
        "name": "Hellsing",
        "type": "Animation",
        "language": "Japanese",
        "genres": [
            "Anime",
            "Horror",
            "Supernatural"
        ],
        "status": "Ended",
        "runtime": 30,
        "premiered": "2001-10-10",
        "officialSite": null,
        "schedule": {
            "time": "",
            "days": [
                "Wednesday"
            ]
        },
        "rating": {
            "average": 7.8
        },
        "weight": 0,
        "network": {
            "id": 131,
            "name": "Fuji TV",
            "country": {
                "name": "Japan",
                "code": "JP",
                "timezone": "Asia\/Tokyo"
            }
        },
        "webChannel": null,
        "externals": {
            "tvrage": 9139,
            "thetvdb": 71278,
            "imdb": "tt0325547"
        },
        "image": {
            "medium": "https:\/\/static.tvmaze.com\/uploads\/images\/medium_portrait\/178\/446544.jpg",
            "original": "https:\/\/static.tvmaze.com\/uploads\/images\/original_untouched\/178\/446544.jpg"
        },
        "summary": "<p><b>Hellsing <\/b>is a 13-part anime based on the manga of the same name. The plot is significantly difficult to that of the the manga although the characters are the same. The show mainly focuses on the hellsing institute that houses the anti-hero named Alucard who swore loyalty to the Helsing family many years before. Alucard being the first ever vampire takes on a new apprentice named Sera's.<\/p>",
        "updated": 1574817902,
        "_links": {
            "self": {
                "href": "https:\/\/api.tvmaze.com\/shows\/25"
            },
            "previousepisode": {
                "href": "https:\/\/api.tvmaze.com\/episodes\/398491"
            }
        }
    },
    {
        "id": 26,
        "url": "https:\/\/www.tvmaze.com\/shows\/26\/hellsing-ultimate",
        "name": "Hellsing Ultimate",
        "type": "Animation",
        "language": "Japanese",
        "genres": [
            "Drama",
            "Action",
            "Anime",
            "Horror"
        ],
        "status": "Ended",
        "runtime": 50,
        "premiered": "2006-02-10",
        "officialSite": null,
        "schedule": {
            "time": "12:00",
            "days": [
                "Wednesday"
            ]
        },
        "rating": {
            "average": 8.3
        },
        "weight": 55,
        "network": {
            "id": 159,
            "name": "TBS",
            "country": {
                "name": "Japan",
                "code": "JP",
                "timezone": "Asia\/Tokyo"
            }
        },
        "webChannel": null,
        "externals": {
            "tvrage": 29109,
            "thetvdb": 263688,
            "imdb": "tt0495212"
        },
        "image": {
            "medium": "https:\/\/static.tvmaze.com\/uploads\/images\/medium_portrait\/178\/446780.jpg",
            "original": "https:\/\/static.tvmaze.com\/uploads\/images\/original_untouched\/178\/446780.jpg"
        },
        "summary": "<p><b>Hellsing Ultimate<\/b>, unlike the 13-part <i>Hellsing<\/i> series, follows the manga of the same name very closely. Alucard being the main protagonist and anti-hero\/vampire. <i>Hellsing Ultimate<\/i> is a 10-part series of OVAs whereby Alucard turns Sera's into a vampire. The main focus of the plot being on an enemy neo-nazi group.<\/p>",
        "updated": 1574298757,
        "_links": {
            "self": {
                "href": "https:\/\/api.tvmaze.com\/shows\/26"
            },
            "previousepisode": {
                "href": "https:\/\/api.tvmaze.com\/episodes\/1437"
            }
        }
    },
    {
        "id": 27,
        "url": "https:\/\/www.tvmaze.com\/shows\/27\/berserk",
        "name": "Berserk",
        "type": "Animation",
        "language": "Japanese",
        "genres": [
            "Anime",
            "Fantasy",
            "Horror"
        ],
        "status": "Ended",
        "runtime": 25,
        "premiered": "1997-10-07",
        "officialSite": null,
        "schedule": {
            "time": "",
            "days": [
                "Tuesday"
            ]
        },
        "rating": {
            "average": 8.5
        },
        "weight": 55,
        "network": {
            "id": 137,
            "name": "NTV",
            "country": {
                "name": "Japan",
                "code": "JP",
                "timezone": "Asia\/Tokyo"
            }
        },
        "webChannel": null,
        "externals": {
            "tvrage": 2764,
            "thetvdb": 73752,
            "imdb": "tt0318871"
        },
        "image": {
            "medium": "https:\/\/static.tvmaze.com\/uploads\/images\/medium_portrait\/0\/249.jpg",
            "original": "https:\/\/static.tvmaze.com\/uploads\/images\/original_untouched\/0\/249.jpg"
        },
        "summary": "<p><b>Berserk <\/b>is a 25-part anime set in a dark fantasy\/horror environment whereby the series focuses on the main character guts; a lone swordman who later meets up with a group of mercenaries called the band of the hawk. The leader of this band holds a strange necklace called a behelit that will only lead to evil.<\/p>",
        "updated": 1610004789,
        "_links": {
            "self": {
                "href": "https:\/\/api.tvmaze.com\/shows\/27"
            },
            "previousepisode": {
                "href": "https:\/\/api.tvmaze.com\/episodes\/1462"
            }
        }
    }
]
```
<div id="execution-results-GETapi-shows" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-shows"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-shows"></code></pre>
</div>
<div id="execution-error-GETapi-shows" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-shows"></code></pre>
</div>
<form id="form-GETapi-shows" data-method="GET" data-path="api/shows" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1","X-Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-shows', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-shows" onclick="tryItOut('GETapi-shows');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-shows" onclick="cancelTryOut('GETapi-shows');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-shows" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/shows</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>lastId</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="lastId" data-endpoint="GETapi-shows" data-component="query"  hidden>
<br>
Field.</p>
</form>


## Search for a TV Show




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/api/shows/search?q=deadwood" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1" \
    -H "X-Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/api/shows/search"
);

let params = {
    "q": "deadwood",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
    "X-Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "id": 565,
        "url": "https:\/\/www.tvmaze.com\/shows\/565\/deadwood",
        "name": "Deadwood",
        "type": "Scripted",
        "language": "English",
        "genres": [
            "Drama",
            "Crime",
            "Western"
        ],
        "status": "Ended",
        "runtime": 60,
        "premiered": "2004-03-21",
        "officialSite": "https:\/\/www.hbo.com\/deadwood",
        "schedule": {
            "time": "21:00",
            "days": [
                "Sunday"
            ]
        },
        "rating": {
            "average": 9.2
        },
        "weight": 86,
        "network": {
            "id": 8,
            "name": "HBO",
            "country": {
                "name": "United States",
                "code": "US",
                "timezone": "America\/New_York"
            }
        },
        "webChannel": null,
        "externals": {
            "tvrage": 3267,
            "thetvdb": 72023,
            "imdb": "tt0348914"
        },
        "image": {
            "medium": "https:\/\/static.tvmaze.com\/uploads\/images\/medium_portrait\/4\/11724.jpg",
            "original": "https:\/\/static.tvmaze.com\/uploads\/images\/original_untouched\/4\/11724.jpg"
        },
        "summary": "<p>The outlaw camp of <b>Deadwood<\/b> marches slowly towards civilization, facing its first elections. But the power struggles continue over everything in Deadwood—influence, money, and whores—as the founding camp members form strategic alliances to face down the threat of a powerful newcomer, seeking to remake Deadwood in his image.<\/p>",
        "updated": 1610995474,
        "_links": {
            "self": {
                "href": "https:\/\/api.tvmaze.com\/shows\/565"
            },
            "previousepisode": {
                "href": "https:\/\/api.tvmaze.com\/episodes\/1607324"
            }
        }
    }
]
```
<div id="execution-results-GETapi-shows-search" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-shows-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-shows-search"></code></pre>
</div>
<div id="execution-error-GETapi-shows-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-shows-search"></code></pre>
</div>
<form id="form-GETapi-shows-search" data-method="GET" data-path="api/shows/search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1","X-Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-shows-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-shows-search" onclick="tryItOut('GETapi-shows-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-shows-search" onclick="cancelTryOut('GETapi-shows-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-shows-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/shows/search</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>q</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="q" data-endpoint="GETapi-shows-search" data-component="query"  hidden>
<br>
Field.</p>
</form>


## Show a specific TV Show by ID




> Example request:

```bash
curl -X GET \
    -G "http://fashionette.test/api/shows/14" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1" \
    -H "X-Api-Version: v1"
```

```javascript
const url = new URL(
    "http://fashionette.test/api/shows/14"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
    "X-Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "id": 14,
    "url": "https:\/\/www.tvmaze.com\/shows\/14\/continuum",
    "name": "Continuum",
    "type": "Scripted",
    "language": "English",
    "genres": [
        "Drama",
        "Crime",
        "Science-Fiction"
    ],
    "status": "Ended",
    "runtime": 60,
    "premiered": "2012-05-27",
    "officialSite": "http:\/\/www.showcase.ca\/Continuum",
    "schedule": {
        "time": "21:00",
        "days": [
            "Sunday"
        ]
    },
    "rating": {
        "average": 8.2
    },
    "weight": 95,
    "network": {
        "id": 6,
        "name": "Showcase",
        "country": {
            "name": "Canada",
            "code": "CA",
            "timezone": "America\/Halifax"
        }
    },
    "webChannel": null,
    "externals": {
        "tvrage": 30789,
        "thetvdb": 258171,
        "imdb": "tt1954347"
    },
    "image": {
        "medium": "https:\/\/static.tvmaze.com\/uploads\/images\/medium_portrait\/0\/184.jpg",
        "original": "https:\/\/static.tvmaze.com\/uploads\/images\/original_untouched\/0\/184.jpg"
    },
    "summary": "<p><b>Continuum <\/b>is a one-hour police drama centered on Kiera Cameron, a regular cop from 65 years in the future who finds herself trapped in present day Vancouver. She is alone, a stranger in a strange land, and has eight of the most ruthless criminals from the future, known as Liber8, loose in the city.<\/p><p>Lucky for Kiera, through the use of her CMR (cellular memory recall), a futuristic liquid chip technology implanted in her brain, she connects with Alec Sadler, a seventeen-year-old tech genius. When Kiera calls and Alec answers, a very unique partnership begins.<\/p><p>Kiera's first desire is to get \"home.\" But until she figures out a way to do that, she must survive in our time period and use all the resources available to her to track and capture the terrorists before they alter history enough to change the course of the future. After all, what's the point of going back if the future isn't the one you left?<\/p>",
    "updated": 1573153509,
    "_links": {
        "self": {
            "href": "https:\/\/api.tvmaze.com\/shows\/14"
        },
        "previousepisode": {
            "href": "https:\/\/api.tvmaze.com\/episodes\/228308"
        }
    }
}
```
<div id="execution-results-GETapi-shows--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-shows--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-shows--id-"></code></pre>
</div>
<div id="execution-error-GETapi-shows--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-shows--id-"></code></pre>
</div>
<form id="form-GETapi-shows--id-" data-method="GET" data-path="api/shows/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1","X-Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-shows--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-shows--id-" onclick="tryItOut('GETapi-shows--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-shows--id-" onclick="cancelTryOut('GETapi-shows--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-shows--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/shows/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-shows--id-" data-component="url" required  hidden>
<br>
The ID of the TvShow.</p>
</form>



