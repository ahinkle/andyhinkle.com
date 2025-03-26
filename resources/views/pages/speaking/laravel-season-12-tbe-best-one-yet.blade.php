<x-app>
    <x-slot name="seo">
        <title>Laravel: Season 12 - The best one yet</title>
        <meta name="description"
            content="In this episode, we discuss activities during morning standups like playing bomberman, we both tried Laravel Cloud for our personal sites, and some API Patterns for when to return 404s.">
        <meta property="og:title" content="Laravel: Season 12 - The best one yet">
        <meta property="og:description"
            content="In this episode, we discuss activities during morning standups like playing bomberman, we both tried Laravel Cloud for our personal sites, and some API Patterns for when to return 404s.">

        <script type="application/ld+json">
            {
            "@context": "https://schema.org/",
            "@type": "PodcastEpisode",
            "url": "https://the-midwest-artisan.transistor.fm/episodes/laravel-season-12-the-best-one-yete",
            "name": "Laravel: Season 12 - The best one yet",
            "datePublished": "2025-02-17",
            "timeRequired": "PT1H3M19S",
            episodeNumber: "14",
            "description": "In this episode, we discuss activities during morning standups like playing bomberman, we both tried Laravel Cloud for our personal sites, and some API Patterns for when to return 404s.",
            "associatedMedia": {
                "@type": "MediaObject",
                "embedUrl": "https://www.youtube.com/watch?v=WxE7nfeyvJI"
            },
            "publisher": {
                "@type": "Organization",
                "name": "The Midwest Artisan",
                "url": "https://the-midwest-artisan.transistor.fm"
            }
        </script>
    </x-slot>

    <p class="py-2 text-center font-sans text-sm text-white/75">March 26, 2025</p>
    <h1 class="text-center font-sans text-3xl font-bold text-white md:text-5xl">Laravel: Season 12 - The best one yet</h1>

    <div class="mx-auto mt-8 max-w-3xl">
        <div class="px-4 pb-10">
            <iframe width="100%" height="180" frameborder="no" scrolling="no" seamless=""
                src="https://share.transistor.fm/e/0e80fcb3?color=1F2937&background=101827"></iframe>
        </div>

        <div class="prose prose-lg px-4 dark:prose-invert">
            <div>In this episode, we discuss activities during morning standups like playing bomberman, we both tried Laravel Cloud for our personal sites, and some API Patterns for when to return 404s.
            </div>
        </div>

        <div class="mt-8 px-4">
            <iframe class="h-96 w-full" src="https://www.youtube.com/embed/WxE7nfeyvJI?si=NXchsI80UDk5CcsS"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <h2 class="mt-12 text-center text-2xl font-bold text-white">Transcript</h2>

        <div class="prose prose-sm px-4 dark:prose-invert">
            <section class="episode-description episode-transcript" x-show="transcript">
                <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=0m0s" data-turbo="false" title="Jump to 00:00 in this episode">00:00</a>)
        <br>Hey everybody, welcome to another episode of the Midwest artisan. I'm your host, Andy Hinkle.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=0m6s" data-turbo="false" title="Jump to 00:06 in this episode">00:06</a>)
        <br>And I'm your cohost, Dal McLeary.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=0m9s" data-turbo="false" title="Jump to 00:09 in this episode">00:09</a>)
        <br>Dalton, how's it going? I feel like I say the same thing every time, but I'm gonna do it again. How's it going, dude?</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=0m13s" data-turbo="false" title="Jump to 00:13 in this episode">00:13</a>)
        <br>It's going good. Love the Midwest weather we're getting where it's nice and 30 at night, 75 in the afternoon.</p>
        
        <p>Yeah, I love this weather though. This is my favorite type of What about you? How you feel?</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=0m26s" data-turbo="false" title="Jump to 00:26 in this episode">00:26</a>)
        <br>Yeah. So you're</p>
        
        <p>you're actually outside now. You're going outside. Awesome. Yeah. Yeah, one day we, yes, do a live show. Yeah, we can do it on back patio. Well, my big yeah, we'll have to figure out the logistics about. Yeah, that'd be fun. Yeah, man, it's been really good. boy just turned two. We had a fantastic birthday. He's really into.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=0m31s" data-turbo="false" title="Jump to 00:31 in this episode">00:31</a>)
        <br>I would like to be outside. We're have a podcast outside one these days in the summer. I'll come to your house and we'll do it outside.</p>
        
        <p>Yeah, yeah.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=0m52s" data-turbo="false" title="Jump to 00:52 in this episode">00:52</a>)
        <br>Which I know we had a short discussion before the show about how much do you how much you like cats and so? He's really into into that so it's life has been really good just want to slow down he got his first haircut and Like there's nothing that prepares you as a dad for the year your especially your son his first haircut He goes from like a baby to a boy. It's just crazy like that I don't I don't even know how to explain it, but that was probably the only other time besides when he was born I really got choked up. I was like my little boy, so yeah anyway</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=0m58s" data-turbo="false" title="Jump to 00:58 in this episode">00:58</a>)
        <br>Love me some cats.</p>
        
        <p>You</p>
        
        <p>Aww. Poor Papa Andy.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=1m24s" data-turbo="false" title="Jump to 01:24 in this episode">01:24</a>)
        <br>Yeah, it's a, it's</p>
        
        <p>yeah, but it's a, it's a such a cool experience. I just want to freeze time and So cool. A lot of Laravel stuff happening. So let's get it. If you'd like to, we can get into it. Yeah, we have Laravel cloud that launched when, since we've been gone and yeah, since I've been working with, with boss man, Jake, we, we came up with a few topics like</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=1m37s" data-turbo="false" title="Jump to 01:37 in this episode">01:37</a>)
        <br>Let's do it.</p>
        
        <p>man.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=1m52s" data-turbo="false" title="Jump to 01:52 in this episode">01:52</a>)
        <br>That'd be a good podcast topic. Like he, he mentioned, went and talked about some on his show and I want to talk about some on our show. So, got some of that. we have browser testing, which I'd love to talk about just how our frustrations with browser testing, we got a song, which I will play in the show. stay tuned. Jake Bennett.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=2m5s" data-turbo="false" title="Jump to 02:05 in this episode">02:05</a>)
        <br>Always fun.</p>
        
        <p>Yeah,</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=2m11s" data-turbo="false" title="Jump to 02:11 in this episode">02:11</a>)
        <br>I wrote a eulogy for Laravel Dusk and that transpired into Jake writing a song and it's a heavy metal song. It's actually pretty legit. We'll give it a whirl here in a bit. Talk about Reddit, how awful Reddit is, but no, it's just that Reddit thread, which how if Laravel is going in wrong direction and maybe the gateway pattern. if we have...</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=2m14s" data-turbo="false" title="Jump to 02:14 in this episode">02:14</a>)
        <br>Okay.</p>
        
        <p>is legit.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=2m33s" data-turbo="false" title="Jump to 02:33 in this episode">02:33</a>)
        <br>Maybe next show, but we'll see if we can sneak it in there. So we have we have stand up</p>
        
        <p>each morning and it's really fun because it's not like a typical standup. I remember you telling me about your standup and you could, you could actually probably share about that in a moment. But our standup is we, go around and it's like, it's, can be pretty lengthy sometimes, but I love it because we get really into each developer's needs. And then when we're on pairing, I like, I know immediately like what they're working on or what they were, what Jake was referring to, or maybe they were screen shared, the developer screen sharing and they,</p>
        
        <p>They were talking about it in specifics instead of like they have to like get me all through it again. We do a ton of pairing and so it's like really nice. I joined on pair like I immediately, you know, can catch on pretty quick. And so, but at the end of the standup, we do a game called Bomberman. And so it's a multiplayer game. It takes like five minutes to play. We do best of three rounds. And so, if you win all three rounds, you get a crown next to your name on Slack.</p>
        
        <p>And so we just kind of tally each day of like who's winning. it's a lot of fun. If you've ever played Bomberman before, it's like power ups, get speed boost, you get extra bombs, but the idea, it's multiplayer game, so you can play, one, you gotta make sure you don't blow yourself up, and then you play with other people to make sure they don't blow you up. And so it's highly competitive, and we do a lot of trash talking, and so it's really good. But.</p>
        
        <p>It's the service that we use is called our website anyway, it's called around.co. I think it's, I don't know if it's part of tuple, maybe not, but I might be getting that wrong. But anyway, unfortunately they're closing down at the end of this month. So we're like each day we're playing like each day we play the game where like guys, we should probably start writing some code to figure out like,</p>
        
        <p>should we find an open source version of this game and try to work on it? Should we ask them for the code? Like, hey, we'll pay whatever, you know, ask the developers since it is shutting down. And so we're looking at writing, probably very likely just implementing our own on an open source version so we can still play it. And so it's for some of our developers, including me, it's like one of the things I really look forward to, you know, with the other developers,</p>
        
        <p>So if you're on a team, just throw this in there. Just like it takes five minutes to do. believe it's free. You can just play as guest. So it's really fun. And we're just finding game that takes five minutes. It won't take too much of your time. And that's actually one of the best ways I know to get to knowing some of the other developers, especially since I'm one of the new people on the team. We get in there and we start just talking, whatever, instead of, you know, work dynamics. so.</p>
        
        <p>It's pretty nice. And again, five minutes of your time as a team. then you maybe have a crown on your Slack handle the rest of the day. So anyway, yeah, we're looking at writing code for that. I started, there's one weekend I was like, you know what? I'm going to see what I can do here to work on this game. man, game development is just like, that's a whole different world of like, it's not just divs and.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=5m35s" data-turbo="false" title="Jump to 05:35 in this episode">05:35</a>)
        <br>gonna do it. Yeah.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=5m45s" data-turbo="false" title="Jump to 05:45 in this episode">05:45</a>)
        <br>Conditions, it's just like there's so much math involved into it.</p>
        
        <p>We got a proof of concept running.</p>
        
        <p>locally so we just have to figure out how to host it. Maybe a little bit a cloud, we'll talk about that. But yeah, what are your standups like?</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=5m59s" data-turbo="false" title="Jump to 05:59 in this episode">05:59</a>)
        <br>Yeah, our standups are as fast as possible. Like I'm just looking back. don't, we don't use Slack. We use Teams, Microsoft Teams. So it like keeps a history of how long I know how long the calls are. And like on average, they're like three minutes, three minutes, four minutes, five minutes, six minutes, two and a half minutes. they're, they're quick, right? They're like, Hey, what are you working on? You got any blockers? No. Okay. Who's next? You got, what are you working on? Got any blockers? No. Who's next? All right. Thanks. Bye.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=6m7s" data-turbo="false" title="Jump to 06:07 in this episode">06:07</a>)
        <br>Ugh, I'm sorry.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=6m30s" data-turbo="false" title="Jump to 06:30 in this episode">06:30</a>)
        <br>It goes by pretty quick. I don't know. I kind of like it being quick. Gets me back to my day of what I'm working on. And we have our pair programming sessions scheduled. So every Wednesday, I meet with my boss for at least an hour, usually two, to just pair program anything. He's like, what are you working on? What do need help with? What do you want to work on? Is there a bug that you have trouble with? Et cetera, et cetera.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=6m59s" data-turbo="false" title="Jump to 06:59 in this episode">06:59</a>)
        <br>That's nice, yeah.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=6m59s" data-turbo="false" title="Jump to 06:59 in this episode">06:59</a>)
        <br>So we just always</p>
        
        <p>have that scheduled time. So you know, I'll just meet with him. If I have anything like pressing, I'll just wait for that or say, hey, can we meet today on Tuesday instead of Wednesday? He'd be like, sure, yeah, whatever. So yeah, our standups are like, get done. But I might, if this is going away or if you guys actually build something that's cool, I might have to suggest that we play this ourselves.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=7m24s" data-turbo="false" title="Jump to 07:24 in this episode">07:24</a>)
        <br>Maybe just share,</p>
        
        <p>you have before the end of the month, today is March 18th, you have just slightly, if you're listening, have before the end of the month to play, around.co, I is the domain, but give that a shot, send it to your team, it's so much fun. You mentioned pairing with your boss on Wednesdays, do you pair with any other developers pretty actively?</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=7m31s" data-turbo="false" title="Jump to 07:31 in this episode">07:31</a>)
        <br>weeks.</p>
        
        <p>not currently, no. currently it's just, it's, I work on one project and they work on a different, bigger project. And so as an easy way to just sort of slide me into the, team dynamic is, is they, they let me have my own project. And so I just work with my boss on that, which is nice, right? Like I don't have to do any of complex stuff. You know, there's three other developers here, so I don't want to have to.</p>
        
        <p>I don't want every single day to have like a pair of programming with somebody else on a different project that would just that would hurt my brain and that context switching is not what I like. So for now, one project, one boss, one pair of programming session a week, like minimum. Sometimes we do a couple. Usually it lasts like an hour to two hours. So we get quite a lot done. I learned a lot about Postgres too. Like I didn't I didn't I knew zero about Postgres when I took this gig.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=8m17s" data-turbo="false" title="Jump to 08:17 in this episode">08:17</a>)
        <br>Yeah</p>
        
        <p>Wow. Yeah. Wow.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=8m37s" data-turbo="false" title="Jump to 08:37 in this episode">08:37</a>)
        <br>And my boss, we were on the phone for like two hours and he was telling me all the things you could do with Postgres that I didn't know you could do normally. And it's awesome.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=8m45s" data-turbo="false" title="Jump to 08:45 in this episode">08:45</a>)
        <br>Do you have,</p>
        
        <p>I'm in the middle the spot, do you have like an example? Do you guys, I guess you guys do a lot with coordinates and stuff like that, geo coordinates, maybe I'm wrong.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=8m52s" data-turbo="false" title="Jump to 08:52 in this episode">08:52</a>)
        <br>Yeah,</p>
        
        <p>there's a column in Postgres like geo. basically, it looks like just a big long string of letters and numbers and whatever. But when it gets interpolated into Laravel through this package, it becomes like coordinates. It's got a lat and a long, it's got an X and a Y. You could swap it to, know, whatever you want. You could cast it to be an array or you can cast it to be a string. It's just all the coordinates. And it's wicked cool. And it could be used to, you know, plot things on a map or plot a line.</p>
        
        <p>on a map, it could draw shapes so you can actually 3D model with these geometry things in a column. Wicked cool. Wicked wicked cool. I didn't know any of that.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=9m30s" data-turbo="false" title="Jump to 09:30 in this episode">09:30</a>)
        <br>Yeah, that's really sweet. yeah, we don't do a ton with</p>
        
        <p>the geocordinates now. I know like, I'm really involved with like the weather, the weather developers community, and they are really big on Postgres, so that makes sense of like, our geocordinates and stuff like that, that's really cool. Yeah, and then Laravel's making a pretty big shift to it's either like that.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=9m46s" data-turbo="false" title="Jump to 09:46 in this episode">09:46</a>)
        <br>that makes sense.</p>
        
        <p>They love that stuff. It's awesome.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=9m57s" data-turbo="false" title="Jump to 09:57 in this episode">09:57</a>)
        <br>at least on the surface, they appear to be like, if you don't want to use SQL, SQLite, use Postgres. And so they used to be everything as MySQL. So yeah, I'm more curious if they'll kind of over the next few years, if we'll continue that trend or what that would be. So.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=10m17s" data-turbo="false" title="Jump to 10:17 in this episode">10:17</a>)
        <br>It's ironic because like Larval Cloud, when it launched, you only had Postgres. You could only like have a production site with Postgres. They're like, my SQL 8 is coming. And then when it came out, it's like, yeah, but don't, don't use this for like production stuff. Like it's not fully working yet, which makes sense because after I use Postgres, it's like, why the hell would I ever use MySQL when I can just use Postgres?</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=10m24s" data-turbo="false" title="Jump to 10:24 in this episode">10:24</a>)
        <br>Mm-hmm.</p>
        
        <p>Yeah.</p>
        
        <p>Interesting. Okay.</p>
        
        <p>So you're telling me if you fire up a new Laravel app right now, your default will be Postgres.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=10m47s" data-turbo="false" title="Jump to 10:47 in this episode">10:47</a>)
        <br>I think so, yeah. I think so. I don't know why I wouldn't.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=10m49s" data-turbo="false" title="Jump to 10:49 in this episode">10:49</a>)
        <br>Yeah, yeah, that's awesome. Yeah I'm</p>
        
        <p>gonna definitely have to get that or give that a roll. I know Aaron Francis has a wonderful course on Postgres. Did you watch that? By chance? Alright, okay.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=10m59s" data-turbo="false" title="Jump to 10:59 in this episode">10:59</a>)
        <br>I have not watched it, but</p>
        
        <p>I told my boss that I would like to watch that.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=11m3s" data-turbo="false" title="Jump to 11:03 in this episode">11:03</a>)
        <br>Okay, yeah, I would definitely like to do the same and get more into Postgres. yeah, Postgres seems like to really be taking a good foundation, at least for cloud. So have you, just switching gears here, have you signed up for cloud? Have you been using it at all?</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=11m22s" data-turbo="false" title="Jump to 11:22 in this episode">11:22</a>)
        <br>I have signed up for cloud. used it day one. I've got three little, you know, small apps for merge loop. It took me about two hours to transfer all of that stuff from, from Forge to cloud and have it like actually be working on whatever the cloud, you know, sub domain is. There were, there were some stuff that I had to figure out how to do that I didn't realize was going to be super complicated.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=11m33s" data-turbo="false" title="Jump to 11:33 in this episode">11:33</a>)
        <br>quick.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=11m49s" data-turbo="false" title="Jump to 11:49 in this episode">11:49</a>)
        <br>And one of the things that I really liked about what I had with Forge was that, you know, since it's Nginx, I could just have like static HTML files, like cached pages, and they could just be served through Nginx. didn't have to touch Laravel. Problem with cloud is that it's not that. So I can't use any of those things. So I had to figure out a new way to like serve my site. It's just the old fashioned Laravel way. So I had to alter a few things and that's what, majority what took it.</p>
        
        <p>the amount of time. We've talked briefly about it, but I don't think that I am the target audience for this. I don't think you're the target audience for this. It's...</p>
        
        <p>It's just, it's in an odd spot and I think a lot of it has to do with the pricing model. $20 a month just for like production Laravel stuff. I could spend $18 a month and have Forge and DigitalOcean and you know, it's fine. I don't have to deal with any of that hibernation stuff. I get my NGINX page caching. So it's, it's odd.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=12m50s" data-turbo="false" title="Jump to 12:50 in this episode">12:50</a>)
        <br>Yeah, let's talk pricing on that.</p>
        
        <p>Yeah, yeah. So yeah, because yeah, for me personally, it's like, yeah, kind of similar to you. I have all my sites on Forage. It's one, it's like, this isn't, it's not an issue. So I don't know why I would want to move them other than the only thing that is appealing to me and it's not ready yet is the feature branches. If they can get automatic feature branches where it opened a PR and I can see a preview of the, the, a sandbox environment.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=13m14s" data-turbo="false" title="Jump to 13:14 in this episode">13:14</a>)
        <br>Mm-hmm. Mm-hmm.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=13m18s" data-turbo="false" title="Jump to 13:18 in this episode">13:18</a>)
        <br>I might strongly consider it, but at least for me, like for small sites, I just don't see it. And the company right now that we, all of our stuff is we take care of all the servers. So we have like a team that does that. So it's not practical for that. And I can see other companies, like the company that we were at, there is a very big application that would be a good candidate for this. Just because there's been times where I...</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=13m30s" data-turbo="false" title="Jump to 13:30 in this episode">13:30</a>)
        <br>Mm-hmm.</p>
        
        <p>Perfect.</p>
        
        <p>Perfect, yeah.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=13m47s" data-turbo="false" title="Jump to 13:47 in this episode">13:47</a>)
        <br>just been in the weeds of AWS and it's frustrating, know, like looking through logs and it's not, it's like it's hooked into Laravel, it's hooked into AWS, but in this case, you're talking like they built it for Laravel. So the logs, the everything is going to be built in the Laravel centric way. And so that sounds really appealing for bigger apps, but yeah, for smaller ones, it is hard. I tried. So I got the, I got my Andy cloud URL. So did you see that thing going around Twitter?</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=14m15s" data-turbo="false" title="Jump to 14:15 in this episode">14:15</a>)
        <br>Yeah,</p>
        
        <p>yeah, yeah. As soon as I saw Taylor posted that I got mine too. I was like, I'm not, nobody's getting mine.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=14m19s" data-turbo="false" title="Jump to 14:19 in this episode">14:19</a>)
        <br>So I got that.</p>
        
        <p>And I did try setting up my personal site, but it threw a fuss on it. It was saying like, It was having some troubles parsing Markdown files. So I'm using like the Common Mark blade stuff by Ryan Chandler for blog posts. Like it's all in Markdown. And the way that my routes and stuff are generated are pulling through those files, the file names.</p>
        
        <p>And then it would look in there to generate, you know, a slog and stuff like that. But it just couldn't, it would have to, it just does some regular expression on that. it was just talking, couldn't like read through those cause it's very similar to AWS. It probably doesn't have a file system work through. But I imagine if they're using, you know, cause they are using AWS. So it's, it's still kind of serverless. So I might have to give that a try again. Cause I know some other people who have a similar setup with Markdown, their site's fine, you know, on Laravel of cloud.</p>
        
        <p>So maybe it was just a me thing, yeah, I just like once I got there and I knew I was kind of like going iffy into it. So but yeah, I want to talk about pricing. Yeah, because it seems to be very around centric around medium to large apps. And, you know, and that's to be expected with this.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=15m20s" data-turbo="false" title="Jump to 15:20 in this episode">15:20</a>)
        <br>Yeah, that's it.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=15m27s" data-turbo="false" title="Jump to 15:27 in this episode">15:27</a>)
        <br>for small sites, can you, do you have pricing on that so far of what you've experienced? Have you got a bill yet from LevelCloud? Taylor said, hey, this up.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=15m37s" data-turbo="false" title="Jump to 15:37 in this episode">15:37</a>)
        <br>No, I have not paid for it. I'm only on the sandbox plan just because know, Forge is $12 a month for me and I have a $6 server, so it's 18 bucks flat every month for me to host my three sites. And like Cloud, its pricing is, like it starts at $20. That's just for Cloud. That's not any of the compute whatever stuff. Now, granted.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=15m49s" data-turbo="false" title="Jump to 15:49 in this episode">15:49</a>)
        <br>Okay, yeah, yeah</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=16m4s" data-turbo="false" title="Jump to 16:04 in this episode">16:04</a>)
        <br>Unfortunately, my sites don't get a lot of traffic, so I don't think I'm going to pay a whole lot in compute. Maybe just like a couple of dollars. So if I'm being optimistic, like $25 a month for cloud for me, I could just save $6 and just keep using Forge. I think there needs to be more pricing tiers for cloud. Like production is $20. I think if they had just had like a freelance tier, that was like five bucks.</p>
        
        <p>You get one server, no auto scale, hibernation, one domain, that's it. Just like one site, that's it. That's all you get, five bucks. I'd love that.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=16m43s" data-turbo="false" title="Jump to 16:43 in this episode">16:43</a>)
        <br>Yeah Yeah, and I was kind of curious like you know I figured they would follow versell and when I remember signing up It was a credit card like oh, that's that caught me by surprise I don't know if you sign up for a vessel versell right now if it requires a credit card But at least I don't remember it. mean I know that's like for for for new developers for anyone starting out They at least for me When I when I get to that page I might click out X out of like oh well. I thought it was</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=17m0s" data-turbo="false" title="Jump to 17:00 in this episode">17:00</a>)
        <br>don't think so.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=17m12s" data-turbo="false" title="Jump to 17:12 in this episode">17:12</a>)
        <br>free or does the inbox is free so that's just kind of cautioned. mean I don't expect to have everything for free but I'm just thinking of a perspective of a new junior developer coming in that doesn't you know in school or whatever if they get to that payment page they're like wait a minute what and they might be kind of confused and first they might verselle might do it now at least when I used it years ago they didn't have like a payment or like a payment required or whatever and I understand why Laravel does it.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=17m14s" data-turbo="false" title="Jump to 17:14 in this episode">17:14</a>)
        <br>Yep, exactly.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=17m41s" data-turbo="false" title="Jump to 17:41 in this episode">17:41</a>)
        <br>but they're just trying to be more open to new developers or to developers from the JavaScript community or other areas. And I feel like that might be a blocker, but we'll see. mean, it is the best way, the easiest way, just literally open it and throw your Laravel up in there. And it should just fire right up and you don't have to deal with servers. And I know a lot of JavaScript people don't want to deal with servers. Some of them don't even know what, what cron jobs are or how to, how to use them, which is mind blowing to me.</p>
        
        <p>So just crazy. So the UI, absolutely amazing. I get so much inspiration from</p>
        
        <p>It's just some of the, uh, this, UI decisions are incredible. And, the, the other thing. Yeah. Yeah. It doesn't need a dark mode. Yeah. I think that's coming. I think I'm on roadmap, but going back to the medium and large app things, one thing I really do like, um, from an agency side of things, it was the idea of teams. felt like forges, uh, the layer of our forge, their circle thing wasn't really flushed out. Like you had to be.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=18m24s" data-turbo="false" title="Jump to 18:24 in this episode">18:24</a>)
        <br>Needs a dark mode though. At me. At me, Taylor. It needs a dark.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=18m49s" data-turbo="false" title="Jump to 18:49 in this episode">18:49</a>)
        <br>Like you had to be logged in as the account owner to manage them. So if I if I'm logging as me Andy lump logging in and I want to add you as like hey come help me on this project. I have to go bug admin or after like go log it in the admin myself to go and add you. And theoretically it's just like if you actually have policies and things like that it's not really flushed out to like hey come help me on this project and maybe like approval system invitations like or request to join stuff like that.</p>
        
        <p>And I feel like cloud is a step closer to that. It's very similar to Vercel and Vercel does that where you can, it's more team based. Like you have your organizational, then you have multiple teams. so, you know, with something like with the flow, now like I remember when I logged in on Forge, like going into those circles, it would be like, you have to sign up for a business plan. Like I'm already on the business plan. but it's just because of my guest on that owner's business plan. yeah, it's so.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=19m39s" data-turbo="false" title="Jump to 19:39 in this episode">19:39</a>)
        <br>Yeah, yeah, yeah, yeah, yeah.</p>
        
        <p>It's done.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=19m45s" data-turbo="false" title="Jump to 19:45 in this episode">19:45</a>)
        <br>Anyway, I feel like they'll have a better flow for that. So that'd be really good. I am very excited for cloud. feel like those medium and large apps, they're going to have a lot of potential there for a, a big moneymaker for Laravel. Yeah, it'll, that would be really good. And like I said, if I, that, particular app back at the agency, I would just, I would already be kind of pushing that way. Yeah. Because the weird you do some, we do some weird stuff over AWS. In fact, that was my first time using Laravel vapor.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=19m55s" data-turbo="false" title="Jump to 19:55 in this episode">19:55</a>)
        <br>Yeah. Yeah.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=20m15s" data-turbo="false" title="Jump to 20:15 in this episode">20:15</a>)
        <br>and I just set it up as like all defaults and the Laravel Vapor database in AWS is called in RDS on AWS. It's just called production and I cannot change it. So like it's just literally the string production and that was because that was a Laravel Vapor default. And if I tried to change it in AWS through a fuss and then</p>
        
        <p>So I asked the vapor team and they said, no, there's not really a, there's not a way to change your database name. Like what? That's just kind of crazy. So I felt like, you know, that would kind of be helpful. Then probably be a solved thing where you don't have to. The reason it was a problem is because when you're an admin, you're rolling around in AWS looking at RDS and like, what is this thing called production? It's very, very ambiguous, right? It's like, you don't know what app it belongs to.</p>
        
        <p>AWS does have like a note description. So I was able to add that in there, but they have to like, hopefully they see that and don't delete it. But I don't, it'd be, if someone deletes the production on there, there is staging. So can see that, but if somebody deletes production on there, that can be kind of scary. But anyway, yeah, you can't change your name, but I feel like cloud, I'll just reach out to support. Hey, we changed it, whatever. I mean, just, it's easy enough. And we don't have to deal, don't have to deal with AWS. Yeah.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=21m16s" data-turbo="false" title="Jump to 21:16 in this episode">21:16</a>)
        <br>Do not delete production.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=21m36s" data-turbo="false" title="Jump to 21:36 in this episode">21:36</a>)
        <br>There's been a few other times of vapor that I've reached out to them. They're like, Hey, you're not to reach out to AWS support because we're, we're out of options here. So then I go to AWS and that if you looked up the pricing for that last time I looked, I think it was like 30 grand a year and, for starting. so it's just like, you gotta be real serious of, of that. So. Yeah. So, I mean, yeah, there's definitely, I mean, just for those reasons, Laravel cloud. Absolutely.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=21m50s" data-turbo="false" title="Jump to 21:50 in this episode">21:50</a>)
        <br>Yeah!</p>
        
        <p>You just gave me a heart attack.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=22m3s" data-turbo="false" title="Jump to 22:03 in this episode">22:03</a>)
        <br>If I was still working on that, if I was still working on the app and I might, I might even get them, you know, but just poke them one day and like, you guys should probably take a look at this and just to migrate in the future. But yeah. So, I need to go back to, I want to give it another shot. And so I was just kind of waiting for, once I saw that exception, I was like, going to let the dust out a little bit and come back to it and see if I can get it all set up again. So I might give it another try. Cause I love the idea of just, yeah.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=22m29s" data-turbo="false" title="Jump to 22:29 in this episode">22:29</a>)
        <br>Yeah, I mean it's good. It's good,</p>
        
        <p>right?</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=22m33s" data-turbo="false" title="Jump to 22:33 in this episode">22:33</a>)
        <br>Right. What does sound appealing to me is not having Laravel Forge and DigitalOcean. What sounds appealing to me is I go to Laravel Cloud. That's it. That sounds awesome. Yeah. My wife will like it too. She's a CFO. So, say, what's DigitalOcean? What is, I like, that's the servers. I thought Laravel Forge was the servers. No, that's a provisioner. What's a provisioner? Yeah.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=22m40s" data-turbo="false" title="Jump to 22:40 in this episode">22:40</a>)
        <br>Correct. Yes.</p>
        
        <p>That's it. love that. Yeah. To me, yeah. I mean, the billions. Yeah.</p>
        
        <p>Yeah, why is there two? is there-</p>
        
        <p>Yeah.</p>
        
        <p>Yeah. Yeah. So I mean, I don't know. Larva Cloud is awesome. My, my two biggest gripes on it is the pricing. It's too high for hobbyists. I consider myself a hobbyist. and I don't like the, I don't like the hibernation stuff. I like it in theory. but I've tested it out on my sites. when it, when a site goes into hibernation and I click on it to open it back up and you know, and it wakes itself back up, takes way too damn long.</p>
        
        <p>I timed it one time, it was like over a minute to bring my site back up. Yeah. And I was like, that's why I liked, know, I, on my deployment hook, go through all of my, you know, static pages and I cache them as HTML files and just have NGINX serve them, right? Super fast. For that reason, I don't have to even worry about, you know, I've got a rinky dink forge server, like the lowest, whatever digital ocean you have for that reason. I don't, I don't hit it at all. With this one, I've got it like on, it's...</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=23m34s" data-turbo="false" title="Jump to 23:34 in this episode">23:34</a>)
        <br>Wow, yeah, just to bring it back up, yeah.</p>
        
        <p>Yeah.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=23m59s" data-turbo="false" title="Jump to 23:59 in this episode">23:59</a>)
        <br>It's not the lowest lowest one, but it's like a one or two bumps up, like the CPU usage one wise. It just takes too long to wake back up. And if I'm paying more money for this service, I expect it to be fast as hell. Like I don't mind 15 seconds. Like if it took 15 seconds to wake up, that's fine. But if like I'm selling stuff and a developer goes to my site, it takes a minute to wake up. I don't think I'm going to get a cell from that.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=24m13s" data-turbo="false" title="Jump to 24:13 in this episode">24:13</a>)
        <br>Hmm, interesting, yeah.</p>
        
        <p>That's, yeah,</p>
        
        <p>their selling point was like, only takes just a few seconds to wake up. So that's interesting. Maybe, I don't know. Yeah.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=24m29s" data-turbo="false" title="Jump to 24:29 in this episode">24:29</a>)
        <br>Yeah, mine was taking, that was the</p>
        
        <p>first two weeks I was testing it out. So I haven't tested it since, and you know, it's the middle of March, so maybe I should try it again. But still, the pricing is too much. It's a bit much for me as a small business owner and a hobbyist. A little bit too much for me.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=24m40s" data-turbo="false" title="Jump to 24:40 in this episode">24:40</a>)
        <br>Yeah, it is still early.</p>
        
        <p>Yeah, yeah, no, for sure. Yeah.</p>
        
        <p>Definitely want to give another spin. So, um, yeah, I might come back to this in a few months. We might have a different opinion. I think. If, if I will tell you a selling point for me, if nightwatch is a, if you don't have to install nightwatch, that would be one thing. And if you just, you're on layer of a cloud, you just click the button and you have nightwatch. That would be a huge selling point for me too. But, um.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=25m6s" data-turbo="false" title="Jump to 25:06 in this episode">25:06</a>)
        <br>Mm-hmm.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=25m13s" data-turbo="false" title="Jump to 25:13 in this episode">25:13</a>)
        <br>Yeah, just like the less main to like I said, I don't have multiple login places. It's just super easy. I just click and in the on there. So yeah, it'll be really good. But to come back in here in a few months and to do another review, probably the same times we go through a night watch. So</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=25m29s" data-turbo="false" title="Jump to 25:29 in this episode">25:29</a>)
        <br>Bingo.</p>
        
        <p>For now, it's fine for now, it probably will get better.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=25m30s" data-turbo="false" title="Jump to 25:30 in this episode">25:30</a>)
        <br>Do you?</p>
        
        <p>Do you guys use browser testing at all?</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=25m36s" data-turbo="false" title="Jump to 25:36 in this episode">25:36</a>)
        <br>no. And I'll tell you why. Because the last time I used browser testing, I think it was at that first gig that you and I worked at together. I made some dust tests. and this might not sound familiar because I was just complaining about how slow Larva Cloud, is about hibernation wakeups. Dust tests make me want to pull the individual eyelashes out of my eyes because it takes so damn.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=25m38s" data-turbo="false" title="Jump to 25:38 in this episode">25:38</a>)
        <br>No.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=26m4s" data-turbo="false" title="Jump to 26:04 in this episode">26:04</a>)
        <br>long.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=26m7s" data-turbo="false" title="Jump to 26:07 in this episode">26:07</a>)
        <br>I a eulogy for Laravel Desk. You wanna hear it?</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=26m10s" data-turbo="false" title="Jump to 26:10 in this episode">26:10</a>)
        <br>So yes, let's hear this eulogy.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=26m13s" data-turbo="false" title="Jump to 26:13 in this episode">26:13</a>)
        <br>want to get some context. So Laravel Dusk, where the new company went out, we use Laravel Dusk and PHP Unit. So yeah, I I understand the reasons for Laravel Dusk. Like one particular, actually at the agency, the CSS, just like the VEAT script was all screwed up and just was not loading CSS. PHP Unit wouldn't have a clue. like, but browser tests, yeah, it would easily pick up on that.</p>
        
        <p>So that was through like an NPM install upgrade. Yeah. Anyway. So since then, I understand the concept and all that, but we cannot just in recent weeks, we cannot get the pass and it's nothing like our features changed or, package upgrades change. just like, isn't our CI, in our GitHub actions pipeline, dust will just not pass. gives us message unknown error, error connection refused. and</p>
        
        <p>the only things out there is in, in GitHub actions, you can retry a task or a step on a task. You just can't retry the entire task. I tried fiddling with it. just, it's a mess. So, but the, how you fix it is you retry it like four or five times and eventually it'll pass. That's just kind of been the thing. And then last week it just died and it was,</p>
        
        <p>And it was right after we're having all sorts of issues. Jake wrote a song, which I will play shortly. It's amazing. And then I before that, I wrote a eulogy. It's dearly beloved. We are gathered here today to mourning the passing of our dear test suite, L'Erevel Dusk. After four long days of suffering, countless retries and more than enough CI logs to sift through, dusk has finally succumbed to its fate.</p>
        
        <p>Dusk was once a shining beacon of automated testing, faithfully clicking buttons, asserting visibility, and making sure our modals actually closed. But in its final moments, it refused the pass, gasping its last breath. Some say we hurt its feelings. Others claim it simply lost its will to live. We tried everything. Reruns, fresh branches.</p>
        
        <p>and even whispered apologies. But Dusk stood for a mince defiance and left us with one final message. Error unknown, net colon colon, error underscore connection underscore refused. Rest in peace, Laravel Dusk. May your selectors always be valid and your elements forever visible.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=28m45s" data-turbo="false" title="Jump to 28:45 in this episode">28:45</a>)
        <br>Well said.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=28m46s" data-turbo="false" title="Jump to 28:46 in this episode">28:46</a>)
        <br>So that was with Chat GPT in a very helpful prompt. So we started just like, OK, we're having too much fun with this. Then Jake created a song. One of our other developers, name is Wilbur Poweroy. So we have a guy named Wilbur, works at Wilbur. So it's a thing. But he's a great dude. He's also a Labrador community member. He's a really good guy. But anyway, he said he cried a little. it was great.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=28m48s" data-turbo="false" title="Jump to 28:48 in this episode">28:48</a>)
        <br>Of course. Of course.</p>
        
        <p>Ha ha ha.</p>
        
        <p>you</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=29m16s" data-turbo="false" title="Jump to 29:16 in this episode">29:16</a>)
        <br>So Jake wrote a song or he like piped this through an AI and it's actually really good. It's heavy metal song. I'll play it. Here we go folks. We'll play the first 30 seconds in. Well, we got to get to the chorus. I don't know where that's at, but we got to get to the chorus. And then if you want to listen to full song, we'll put it at the end. Here we go.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=29m22s" data-turbo="false" title="Jump to 29:22 in this episode">29:22</a>)
        <br>Yeah, Please. Please.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=30m38s" data-turbo="false" title="Jump to 30:38 in this episode">30:38</a>)
        <br>All right, so that was the song that he had generated through AI. We'll play the full thing at the end. But my favorite part was, yeah, the block pull request. It really like emphasizes the pull request. It's good. It makes you feel it. It makes you feel it just like we felt it in the failing test.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=30m59s" data-turbo="false" title="Jump to 30:59 in this episode">30:59</a>)
        <br>hilarious.</p>
        
        <p>I love every single bit of that. Well done. Well done.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=31m4s" data-turbo="false" title="Jump to 31:04 in this episode">31:04</a>)
        <br>Then yeah,</p>
        
        <p>I felt that quite a bit because there was one PR I was really wanting to get merged and I just sat here and hit the retry button over and like I said, the thing how to fix it is hit the retry button like four or five times. We were going like I was at like 27 retries and like, I think it's broken. Like it's just not going. It's just not happening. again, like there's a difference between like halfway through like,</p>
        
        <p>You gotta go back and are these actually failing? Is that actually what's happening here? Or is it just broken and it's just broken? So we've had all sorts of people come in and try to fix these things. But anyway, where we're trying to go is we're trying to use Playwright. So Playwright is a JavaScript browser testing, a new no, Maduro, a Laravel core guy. He is, I think he's integrating this into Pest of some sort, maybe perhaps a plugin.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=31m48s" data-turbo="false" title="Jump to 31:48 in this episode">31:48</a>)
        <br>Yeah.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=31m59s" data-turbo="false" title="Jump to 31:59 in this episode">31:59</a>)
        <br>There's not a release on the package yet, but it looks really good. he has like it's kind of If you know with dusk dusk use it. What does dusk use under the hood? It's been forever since I looked at that But you know how it uses I think it's one of Facebook's things like something by Facebook they have But uses something by them under the hood. It's kind of a similar concept but for playwright It's you you can use playwright, but you can also use all the Laravel's goodies with it with along with playwright. So</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=32m17s" data-turbo="false" title="Jump to 32:17 in this episode">32:17</a>)
        <br>Yeah</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=32m28s" data-turbo="false" title="Jump to 32:28 in this episode">32:28</a>)
        <br>Now we're in this holding pattern. like, okay, should we kind of run our own implementation and kind of baby this thing along? Should we wait for Nuno No So we think we're at least the current pattern. We're just gonna hold off and see where things shake out. But Yeah, I browser tests are just so tricky. They make sense. I understand them CI takes forever. It's like any any CI that takes more than a minute to run just like come on, know, I'm ready to</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=32m57s" data-turbo="false" title="Jump to 32:57 in this episode">32:57</a>)
        <br>me.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=32m58s" data-turbo="false" title="Jump to 32:58 in this episode">32:58</a>)
        <br>Yeah, I want to see all green before I send this to somebody. Hey, you want to pair on this PR or whatever, you know? So it's just like, all right, I'm going to go get a Coke and come back. it's freaking failing. Freaking dusk. So yeah, but it's good.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=33m11s" data-turbo="false" title="Jump to 33:11 in this episode">33:11</a>)
        <br>So let me ask you this question then. I've actually got a couple questions. How long does your pipeline take if dusk runs correctly?</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=33m19s" data-turbo="false" title="Jump to 33:19 in this episode">33:19</a>)
        <br>Good question. want to say it's, I want to say, I mean, it's not, it's not unbearable. I remember that it's, I want to say it's probably five minutes. I think they've actually, yeah, yeah, it's not too bad. I remember, you know, like the app that we had years ago when we were mostly, we were probably very exclusively Laravel dusk tests. would be rare that we wrote a unit test unless it was doing like a backend thing, like, you know, a job or something.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=33m29s" data-turbo="false" title="Jump to 33:29 in this episode">33:29</a>)
        <br>minutes.</p>
        
        <p>Okay.</p>
        
        <p>Mm-hmm. Mm-hmm.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=33m45s" data-turbo="false" title="Jump to 33:45 in this episode">33:45</a>)
        <br>But we are, if it was doing something front end, we wrote a dust test for it. And, um, yeah, everything. And so I remember that would take sometimes up to 20 minutes. Like you just have to wait, you know, for that was back, you know, that was back then. And, know, yeah, I think we even use Travis is are they even around anymore? I think they're, I was reading, I think they are. I think I was reading something about how they are trimming some services back. And I think they're obviously, I mean, for they have, have.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=33m50s" data-turbo="false" title="Jump to 33:50 in this episode">33:50</a>)
        <br>login tests, checkout tests, yeah.</p>
        
        <p>That's why I was impressed when you said five.</p>
        
        <p>Ooh, I don't know.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=34m15s" data-turbo="false" title="Jump to 34:15 in this episode">34:15</a>)
        <br>Circle CI, they're still around. But GitHub Actions is where it's at. I know GitLab has its own thing, but Travis used to be the thing back in the day. But anyway, yeah, that took like 20 minutes over on Travis CI back when. But now it's like...</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=34m32s" data-turbo="false" title="Jump to 34:32 in this episode">34:32</a>)
        <br>Yeah, so I'm</p>
        
        <p>impressed you said five minutes. I was not expecting five minutes at all. Like my, my GitHub actions now on the site that I'm working on has like, it's like 250 tests and it takes like a minute and a half to do the, to the whole build, set up, you know, Postgres run all of it. Problem is that it's, it's not even parallel. It's not running parallel because there's only one Postgres image. So, you know, it just runs all 250 back to back to back to back. So yeah.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=34m46s" data-turbo="false" title="Jump to 34:46 in this episode">34:46</a>)
        <br>Yeah, that's really good. Yeah.</p>
        
        <p>Mm-hmm.</p>
        
        <p>well that's impressive if it's not parallel.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=35m1s" data-turbo="false" title="Jump to 35:01 in this episode">35:01</a>)
        <br>I'm impressed with you said five minutes. Like how many, so how many dust tests do you have? Is there one that just like hits the homepage and sees if CSS loaded or is there like actual end to end stuff?</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=35m6s" data-turbo="false" title="Jump to 35:06 in this episode">35:06</a>)
        <br>man.</p>
        
        <p>Yeah, it's</p>
        
        <p>mostly intent, just like, we're going to load this page, we're going click this Vue component, make sure it's doing the correct thing.</p>
        
        <p>Yeah, I actually just pulled it up and it looks like we only have about 50 or so. But I think we would, if we didn't have this issue, like just the burden of dusk, we'd probably have more. I mean, I would probably do, if you're asking my honest opinion, if it was, if dusk was fast as just unit tests, I'd probably write a dust test every time. Understandably, it can never get that fast, but just because it actually has to reload a DOM and it has to interact, et cetera, et cetera.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=35m47s" data-turbo="false" title="Jump to 35:47 in this episode">35:47</a>)
        <br>Mm-hmm. Mm-hmm.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=35m48s" data-turbo="false" title="Jump to 35:48 in this episode">35:48</a>)
        <br>So on previous apps I've done just mostly because the speed in it accomplishes the same, except, you know, it's not actually browser testing, but with Jest, that's the, one of the big apps we worked on together is it's PHP unit and Jest together. And that works really well. we have Jest testing our react components and on this particular app. then, yeah. And then PHP unit for everything else. think I switched it to pest before.</p>
        
        <p>I left so yeah anyway yeah it's it can be frustrating with the browser test so there's just not really a clear cut answer and I feel like Nuno was asking that on twitter and we got a lot of feedback like yeah dusk kind of sucks so yeah hopefully yeah I'm just kind of curious yeah which I'm kind of curious in years to come if</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=36m35s" data-turbo="false" title="Jump to 36:35 in this episode">36:35</a>)
        <br>Yeah, kinda. What can you do?</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=36m44s" data-turbo="false" title="Jump to 36:44 in this episode">36:44</a>)
        <br>they're gonna still kind of maintain dusk. I'm talking like 10 years from now, will dusk be a thing? Just because it's just, it's so problematic and then there's just new tools new tools of the trade coming. So we'll see.</p>
        
        <p>so One of the other things I wanted to bring up was just this idea of rather, um, to return a 400 or 200 on a, non-existing data route. So I'll just kind of set the scene for you. And I'm kind of curious the way that you would address this.</p>
        
        <p>All right, you working on a new feature for email verifications. This is outside the scope of users table. So users table isn't a thing. We don't we don't know who they quite are. We just know that we just need to guess. No. Did they do like double opted something like that would double up or they confirm their email address. They click the button, confirm their address. So you might have a table like email underscore verification, something like that, where it's just a simple like email field. That's it.</p>
        
        <p>Something to that effect, right? So this is an API endpoint from an accompanying application. this, you have another application talking to your application, say, Hey, is this email verified up down? So you're going to create this, this API endpoint controller. You have a controller. might be something like verified email controller. I don't know something to that effect. We can even say it's invocable or maybe just have like a store route.</p>
        
        <p>and a show route, just something like want to store the verification, like, we have this email, it's verified. Just return 201, you know, that we stored it. Then a show route that we have. And this is where I want to ask you. you have an API route inside the show method. You have a given email address, which will hit the table and return a response. So if the given email address is not verified,</p>
        
        <p>What's your response here? What's your status response? Your code status code response.</p>
        
        <p>put you on the spot.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=38m46s" data-turbo="false" title="Jump to 38:46 in this episode">38:46</a>)
        <br>Yeah, is this an interview? Is this a coding interview question?</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=38m48s" data-turbo="false" title="Jump to 38:48 in this episode">38:48</a>)
        <br>It's actually not about interview question, just understand their thinking.</p>
        
        <p>So did I lay the land for you pretty well with that?</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=38m56s" data-turbo="false" title="Jump to 38:56 in this episode">38:56</a>)
        <br>Yeah,</p>
        
        <p>yeah, yeah, so it's, my immediate thought is that it can't throw a 404 because it's found, but its status is not the one that you think it is. But you did find the record, right?</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=39m12s" data-turbo="false" title="Jump to 39:12 in this episode">39:12</a>)
        <br>so we'll just say that the incoming email is not there. Yeah, let me set that up better. The incoming email does not exist. So we have an API request to the show route to determine if the email is verified or not. This record does not exist. Basically we're gonna say no it doesn't. Do we return a, two options here. Do we return a 200 with a response key of verified false or do we just return a 404?</p>
        
        <p>It's not. Yeah, it's one of those tricky ones.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=39m47s" data-turbo="false" title="Jump to 39:47 in this episode">39:47</a>)
        <br>Yeah, I think it would depend on who's calling the API and what they expect. My head immediately would go to a 200 and either just say status false. Because the API works and it does its thing.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=39m58s" data-turbo="false" title="Jump to 39:58 in this episode">39:58</a>)
        <br>Okay. That's what Jake said. Yeah.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=40m7s" data-turbo="false" title="Jump to 40:07 in this episode">40:07</a>)
        <br>and you give it the right things, it should say, 200, this is either verified, not verified, or it doesn't exist, therefore it isn't verified. That's where my head goes. I would lean more towards the 200 versus a 404, in my opinion.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=40m24s" data-turbo="false" title="Jump to 40:24 in this episode">40:24</a>)
        <br>Interesting. Okay.</p>
        
        <p>Yeah. And, so I had this conversation with, with boss Jake and he was saying pretty much the same thing. He boss Jake. So he was saying the same thing. Actually. He, in our code review, he was just like, what's this going on? What's going on here? And, where my mind.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=40m33s" data-turbo="false" title="Jump to 40:33 in this episode">40:33</a>)
        <br>Jake. Let's call him that all the time. It's not Jake Bennett anymore, it's Boss Jake.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=40m48s" data-turbo="false" title="Jump to 40:48 in this episode">40:48</a>)
        <br>I want to start off with my thought process of like when I wrote this thing. One is a show method. So I'm thinking usually typically you have a model in there and if the model doesn't exist, it's just going to toss you a 404, right? So that's where my head space was at. And I was just like, well, if it doesn't exist, it's going to return 200. If it does, or if it doesn't, if it, if it does exist, it's going to return a 200. If it does not exist, it's just going to turn 404.</p>
        
        <p>Empty response, but then it's just like, probably should have a response in there because an empty response is empty. Response is kind of weird, too. You should have a response because you're not going to do no content because that's that's a whole different discussion. So then you have that you always have this key of this key of verified bull is bull verified to false. So you have to include that. But then so then I had this condition there like, oh, if it's verified, there were 200 if it's not verified, there are four or four. But then</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=41m23s" data-turbo="false" title="Jump to 41:23 in this episode">41:23</a>)
        <br>Yeah, right, that makes no sense.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=41m40s" data-turbo="false" title="Jump to 41:40 in this episode">41:40</a>)
        <br>my thought process is in my other app, I could just determine like quickly if like, hey, if this is 404, you know, it's bad. it's 200, it's good. But his response, he was telling me that, you I don't, he said, am I getting a 404 because the email is unverified or am I getting a 404 because the route doesn't exist? Like I just, don't know why I'm getting a 404. Is there a bad data issue? And so,</p>
        
        <p>That was kind of an interesting thing. But ultimately, I just ended up to returning a 200. It's always a 200 response. there's a verified key connection. It was a really good discussion. was just like, yeah, mean, should it be a 404? Because it's kind of tricky. Because if it's a model, if there's a model returning, yeah, it's just kind of a tricky thing. Like if you do user API slash user slash one and.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=42m25s" data-turbo="false" title="Jump to 42:25 in this episode">42:25</a>)
        <br>I'll do a lot of magic.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=42m33s" data-turbo="false" title="Jump to 42:33 in this episode">42:33</a>)
        <br>And then if you would show it give you back the first record if you typed in whatever else in there It's gonna give you four or four. so he kind of convinced me with that balls like this is a good good discussion But anyway, yeah, I just thought that was kind of a tricky thing. I ran across</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=42m46s" data-turbo="false" title="Jump to 42:46 in this episode">42:46</a>)
        <br>Yeah, damn, I don't think that the 200 versus 400, I don't think there's a right answer, right? I think that's the problem with this damn programming stuff is that there's never one way to do everything. But I agree with Boss Jake on his reasoning. Boss Jake? Did I pass the interview question, Boss Jake? I'm kidding, I'm kidding.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=43m8s" data-turbo="false" title="Jump to 43:08 in this episode">43:08</a>)
        <br>Yeah, that's cool that</p>
        
        <p>you agreed. Well, I will also tell you that what finally made me come to the ultimate decision is ChatGPD or if you asked Primogen, ChatGipity, ChatGipity agreed with you and said that, because I kind of laid out this out and I said, what's kind of the best practice, what's most common? And ChatGipity said, hey, the 200 is kind of the...</p>
        
        <p>the way we go here, but I would just like my mind's like, you know, I understand all that. just like, but the thing with the model is just what got me tripped up. I was like, if it's a model, you know, like, yeah, it gets a one way or other. Yeah.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=43m43s" data-turbo="false" title="Jump to 43:43 in this episode">43:43</a>)
        <br>Yeah.</p>
        
        <p>You could convince me, you could convince me that the 400 and use the Laravel</p>
        
        <p>default, know, the route model binding, you don't see it, it's gonna throw a 404 for you anyway. Like you could convince me to say, hey, this is the Laravel default, let's use the Laravel default. You could convince me. He would probably use the Laravel default. Yeah, he would probably use the default. All right, boss Jake, listen, you're overruled. Taylor said 404, we're changing it back, sorry.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=44m1s" data-turbo="false" title="Jump to 44:01 in this episode">44:01</a>)
        <br>What would Taylor do? I bet Taylor would do a 404. Yeah, what? Yeah, yeah.</p>
        
        <p>I bet yeah</p>
        
        <p>What would Taylor do that's good? Yeah I'm gonna start my every Claude air chat GPT with that. What would Taylor do? Yeah What would do yeah, that's good Speaking of Taylor he came back to reddit Wow, which one of the first comments on the reddit thread was</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=44m16s" data-turbo="false" title="Jump to 44:16 in this episode">44:16</a>)
        <br>Hahaha, well, yeah that's-</p>
        
        <p>Read through Taylor Ottwell's tweets and tell me how he would program this for me. An AI chat, Taylor.</p>
        
        <p>no.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=44m38s" data-turbo="false" title="Jump to 44:38 in this episode">44:38</a>)
        <br>Babe, wake up, Taylor's back on Reddit. So, I like that. Anyway, also on Reddit was this very popular post. It says, is Laravel going in the wrong direction? And it actually ended up being the most, or it actually ended up being the number one all time thread on our Laravel or on the Laravel subreddit. And so,</p>
        
        <p>Just some stats, has 1.3K upvotes, 500 comments, and 227,000 views. That's a ton of people. So looking at this thing, probably from different ecosystem, JavaScript, et cetera. anyway, one thing that caught me by surprise was 96 % upvotes compared to like, you know, have upvotes, starvotes on Reddit.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=45m15s" data-turbo="false" title="Jump to 45:15 in this episode">45:15</a>)
        <br>wild.</p>
        
        <p>Mm-hmm.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=45m27s" data-turbo="false" title="Jump to 45:27 in this episode">45:27</a>)
        <br>Like, wow, a lot of people actually agree with this or have some, some value into where they maybe agree with parts of this. some key points. First of all, did you see this by the way? I just, before I started going to this and you have no clue what I'm talking about. Okay. Yeah. Okay. Okay. Yeah. And if you have it just,</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=45m38s" data-turbo="false" title="Jump to 45:38 in this episode">45:38</a>)
        <br>I did. Yeah, no, no, no, I've read this thing. Yeah.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=45m45s" data-turbo="false" title="Jump to 45:45 in this episode">45:45</a>)
        <br>If you haven't seen this thread yet, just Google the term Laravel is going in the wrong direction. I'm sure it would be the first result. But the some points they were making on this thread that just took some notes here. They said JetStream is end of life. The Laravel starter kit, which relies on Volt, one of the I guess the live wire kit magic strings. They had a problem with that. The the code sample they gave was like a PHP attribute.</p>
        
        <p>annotation so Which I kind of like so and at least in models and stuff like that but like anyway the This this thread kind of like drove me nuts because People are like it just like people like maybe it's time for a fork and I'm reading I'm like if you had a Laravel fork What would you do differently like it's a lot of the stuff is even having to having to do with the fork of Laravel Some of it is starter kits</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=46m20s" data-turbo="false" title="Jump to 46:20 in this episode">46:20</a>)
        <br>You</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=46m43s" data-turbo="false" title="Jump to 46:43 in this episode">46:43</a>)
        <br>which you can create your own starter kit. Now, if you do like Laravel new with starter kit, you can type in your own repo. Yeah, one of the comments that says I missed the Laravel five days where it was just playing blade MVC and some sprinkles of you. I'm like, where are we? Is this 2025 now? We have blade components. You can still use it. You can still use blade. You can still use Laravel in this way. So I'm getting fired up. You can use Laravel in this way.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=46m50s" data-turbo="false" title="Jump to 46:50 in this episode">46:50</a>)
        <br>Mm-hmm. Mm-hmm.</p>
        
        <p>Yeah!</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=47m11s" data-turbo="false" title="Jump to 47:11 in this episode">47:11</a>)
        <br>You're not forced to use anything. You can still do everything you just said. Like you can still use blade MVC. You can still sprinkle in view. You can still do that today. And the thing now that's better than ever is like testing and you can by doing components, you can isolate them and test them individually and inside your tests. Then not to mention tools like filament, mean, or, know, Laravel Nova or just like stuff that came like, yeah.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=47m37s" data-turbo="false" title="Jump to 47:37 in this episode">47:37</a>)
        <br>get me started on film.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=47m40s" data-turbo="false" title="Jump to 47:40 in this episode">47:40</a>)
        <br>When we wrote that app 10 some years ago, me and you together, we were doing all this by hand in admin panels. Like here's where we manage our users. Like that was just painstaking back in Bootstrap. And I'm so thankful the tools we have today. yeah, just thinking of Bootstrap. Some people still like it, I get it. Yeah, but they still like it, I understand. But I mean, it's frustrating just like seeing all these.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=47m56s" data-turbo="false" title="Jump to 47:56 in this episode">47:56</a>)
        <br>Makes me shudder thinking about bootstrap.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=48m6s" data-turbo="false" title="Jump to 48:06 in this episode">48:06</a>)
        <br>These comments and this was shortly after Taylor came back So I can kind of I don't know if that way handed in because Taylor came back and he's like, hey guys We got a new starter kit. It does not rely on volt. So volt is that That thing where you have your PHP and your blade all in one and it's interactive. So I'm a big fan of folio. Have it use volt</p>
        
        <p>But folio is really cool. But I mean, it got around to using fault yet. And actually in the Prime Engine stream with Taylor, did you watch that? I know it's like seven hours long. Did you end up watching any of that? OK, you did. You should. Yes. I just had it on in the background working one day, too. That is just put on your list if you just want something to watch in the background. It's just so it's just some gold in there. I just it was probably the best coding live stream I've ever watched. There's so much entertainment in there.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=48m38s" data-turbo="false" title="Jump to 48:38 in this episode">48:38</a>)
        <br>I've seen the memes after it of like them all pointing in the background. I've seen that but I haven't watched the...</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=48m59s" data-turbo="false" title="Jump to 48:59 in this episode">48:59</a>)
        <br>Yeah, yeah, it was really entertaining. But anyway, yeah, the they use fault in that and that and so that the comments, the comments on Twitch and YouTube are like, why are you using volt and all this and what's always got a bad rap? But I haven't given it. I don't like to dog something unless I've given it a try for a good throw try in production. I've used, know, I haven't got to that point yet. And people just do start it without even trying it. So anyway.</p>
        
        <p>a lot of the comments were around the starter kits, and on the thread, some of them use work OS, which is like a third party authentication service. It's like, can end up being a paid service. And then, some other ones they use.</p>
        
        <p>Caleb's, uh, Caleb Porzio his flux package, some of those components, if you want to expand on it, like if you want to do a date picker, You have to upgrade to flux pro anyway. Taylor came around and he did the, um, he did another Laravel starter kit without volt. And then they, uh, one of the things that, I said earlier, they said jet streams into life. Now jet stream is supported and.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=49m45s" data-turbo="false" title="Jump to 49:45 in this episode">49:45</a>)
        <br>Yeah.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=50m8s" data-turbo="false" title="Jump to 50:08 in this episode">50:08</a>)
        <br>Even if they didn't to be honest, I could even abstract that out Maybe a day like if I had jet stream in my code, which we have a few apps that work that you have jet stream I see jet stream more as a starter. Okay, anyway, it's just like where I prefer to maintain password resets I prefer to maintain the API tokens like if you just if you give me an app where these are already here for you Here's the code if you want to change it jet stream does</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=50m21s" data-turbo="false" title="Jump to 50:21 in this episode">50:21</a>)
        <br>I agree.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=50m35s" data-turbo="false" title="Jump to 50:35 in this episode">50:35</a>)
        <br>75 % of that but also tucks a lot of stuff under the hood They even still maintain Laravel UI, sorry I keep going on this they maintain Laravel UI and you know what they even maintain that stupid like the legacy factories package Which if you're not on the newest factories, you're you're missing out. That was back in Laravel 8</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=50m43s" data-turbo="false" title="Jump to 50:43 in this episode">50:43</a>)
        <br>fired up.</p>
        
        <p>Yeah, what are you doing?</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=50m52s" data-turbo="false" title="Jump to 50:52 in this episode">50:52</a>)
        <br>Lererville 12 support on legacy factories. So I don't even know how to write one of those. I don't even remember how to write it.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=50m59s" data-turbo="false" title="Jump to 50:59 in this episode">50:59</a>)
        <br>Refused to write one of</p>
        
        <p>those they look like somebody vomited in my ID those old old-school ones</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=51m3s" data-turbo="false" title="Jump to 51:03 in this episode">51:03</a>)
        <br>Yeah,</p>
        
        <p>I don't remember how to write those anymore. So anyway, if you ask me, they are going in the right direction. There are some hiccups in there. think people on the, I'll just stop there. I'm curious to get your thoughts. So you saw this.</p>
        
        <p>What do you think of all this mess on Reddit?</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=51m28s" data-turbo="false" title="Jump to 51:28 in this episode">51:28</a>)
        <br>Yeah, it's... I mean, some of the things, sure. Like, I'm not a big fan of Volt either. I remember when they announced it at Lericon, I kind of rolled my eyes, was like, I don't really like that. But here's the thing, is that I just never used it. I don't... I I don't... They're not making me use Volt. I can still use LiveWire the way that I want. This whole thing with starter kits is...</p>
        
        <p>I don't know if we'll get hate for this. If you do, hey, thanks for the comments. can at me at Dalton McCleary on whatever. Starter kits are fine. I don't reach for starter kits unless they're my own. You can buy them at MergeLoop.dev. You can buy my own starter kits. But that's what they're for. They're just like, get you started. Get you an extra step of the way. Hey, I want JetStream just so could do teams. I usually roll my own team invites when I use JetStream anyway.</p>
        
        <p>But I like Jetstream that it gets me there faster. And I think that's the whole point is that those starter kits are just supposed to be some helpful stepping stones. not supposed to be like, I installed this starter kit and my app's done and I launch it on cloud in a day. That's not how it really works, but sure, you could do that, I guess. My problem is that this whole thing of it going in the wrong direction, like what's the direction they're going in that's wrong? Like what's specifically about it? They have too many options?</p>
        
        <p>I've before we got on this podcast. I mentioned that before I Liken Laravel to Apple like the iPhones. They're nice. They're shiny. They're magic. They do what I want without me asking. And I compared symphony to Android because I don't like Android or symphony. You can fight me on that too. But I was telling Andy that it feels a lot like Laravel is a lot like Marvel nowadays. Too many shows, too many movies.</p>
        
        <p>Too many seasons, I can't catch them all. I'm only gonna pick and choose what I want. And the problem is that when you realize that you could just pick and choose what you want, you're a whole lot happier. Like, if I don't wanna watch, yeah. Season five, when Laravel 5.4 came out, I told Andy, was like, I wanna pull my hair out how much that upgrade sucked. But like, it sucked, but I got a job because of it. I still get paid because of it.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=53m31s" data-turbo="false" title="Jump to 53:31 in this episode">53:31</a>)
        <br>Season season one was the best season.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=53m49s" data-turbo="false" title="Jump to 53:49 in this episode">53:49</a>)
        <br>I just think that, yeah, there just might be a little bit too many options. Like that's, that's all I'm getting a lot from these comments is there's too many options. Not all of them fit my specific needs. And that's the beauty of programming is that like we talked about earlier, there's not one way to do everything. You could do just whatever you want. You can shoot yourself in the foot. That's fine. If you want to write only in blade or only in view or use Aaron Francis, new fusion thing. If you want to use that, that's fine.</p>
        
        <p>I think it's up to you and how your users use it. I don't think it's Laravel's fault. That's my hat-take.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=54m24s" data-turbo="false" title="Jump to 54:24 in this episode">54:24</a>)
        <br>Yeah, yeah, for sure.</p>
        
        <p>Yeah. I think some people forget the word starter and starter kit. Yeah. So they think, yeah, to your point here, you're saying just like they get their app set up and they'll upgrade and then they'll be using their starter kit and then I'll create two Laravel 12 and they expect that starter kit to be one to one with their Laravel app. It's like, it's a starter kit, not, it's not, you know, something right.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=54m31s" data-turbo="false" title="Jump to 54:31 in this episode">54:31</a>)
        <br>Yeah.</p>
        
        <p>It's not a component kit, it's a starter</p>
        
        <p>kit. You start here and build the rest of your app from here. You could delete stuff, you could change stuff, you can add stuff, like that's the point of the starter kit.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=54m55s" data-turbo="false" title="Jump to 54:55 in this episode">54:55</a>)
        <br>Yeah.</p>
        
        <p>Don't get me wrong. I want my Laravel app one to one with the the Laravel slash Laravel repo. If it's not the same as that one, like that drives me nuts. the if for example, they change the architecture and then the ENV variables, like you can use the old ones. But if it's not the same as the new one, that that's going to drive me nuts. I want them all. I want to be on the newest version in it to be the same. And so I don't need to be on the latest, greatest thing. But if I'm using Laravel 11, I expect to be on the new Laravel architecture. I'm not.</p>
        
        <p>I'm not using the old legacy factories package. I'm not using all this stuff from that I'm still babying along. And so, cause that stuff will bite you and you're going to spend way more time trying to baby along than just fixing it. So yeah, this, yeah, this thread made my blood rise a little blood pressure rise a little bit, but just like it's frustrating.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=55m52s" data-turbo="false" title="Jump to 55:52 in this episode">55:52</a>)
        <br>Yeah, don't,</p>
        
        <p>don't get me wrong. There are some good points, right? Like, like I'm not dogging on everybody. you know, the, the, the move more towards paid services, right? Like, well, I was just complaining about Laravel cloud, like what, 30 minutes ago of how it's too expensive and I'm not going to use it it's so expensive. I could post that comment on here and like, yeah, Laravel cloud's great, but it's not for me. I'm not paying that somebody else probably could pay that and find value in it, but it ain't going to be me.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=55m57s" data-turbo="false" title="Jump to 55:57 in this episode">55:57</a>)
        <br>Yeah, they are,</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=56m21s" data-turbo="false" title="Jump to 56:21 in this episode">56:21</a>)
        <br>If they lower the prices, I'll use it. I see a lot of people like that pushing users towards more paid services like Forge, Cloud, Vapor, Night Watch, things like that. I mean, I get it, yeah, but if it's gonna save you, if it costs you what, like 20 bucks a month, but it saves you more than $20 a month over time, it's worth it. And I think a lot of paid starter kits do that a lot too. A lot of the advertisements for paid starter kits are...</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=56m33s" data-turbo="false" title="Jump to 56:33 in this episode">56:33</a>)
        <br>Mm-hmm.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=56m49s" data-turbo="false" title="Jump to 56:49 in this episode">56:49</a>)
        <br>It saves you a week's worth of time at building all this stuff yourself. You don't have to. And I think a lot of Laravel stuff is doing that. Now, when they start doing weird stuff like Apple, where they introduce a feature just to sell you the paid fix, then I can understand where that would be a huge pain. I don't think Laravel's done that yet. I don't think they've introduced a pain point to sell you a solution yet. The solution is always just gonna be...</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=57m12s" data-turbo="false" title="Jump to 57:12 in this episode">57:12</a>)
        <br>Mm-hmm. Yeah.</p>
        
        <p>It's, yeah.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=57m18s" data-turbo="false" title="Jump to 57:18 in this episode">57:18</a>)
        <br>composer</p>
        
        <p>install or composer require whatever the command is to start a new Laravel app. You can always do that for free.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=57m26s" data-turbo="false" title="Jump to 57:26 in this episode">57:26</a>)
        <br>Yeah, then there was a post a couple days ago that was saying they removed a lot of SAIL stuff from the installation docs. And I went through and sure enough, they kind of reference you using herd and they're like, my gosh, they're pushing herd more. like, they don't make anything on herd. It's all beyond code. It's just like, I can see that from their people side of like, my gosh, they're trying to push this product.</p>
        
        <p>There are companies out there that do that, but Laravel does not want to do that. They just want developer experience to be first. And here's what they recommend. And over on Symfony, when we work on Symfony apps together, they give you the freaking kitchen sink. And some of that's like, okay, you can either put routes in the annotations or routes in a file. Like what's the best practice here? And they're their docs just say, well, you can just do either one. It's just like.</p>
        
        <p>Okay, what's we need to best practice and that's what I like Laravel so much is they say here's usually what the best practices in fact for myself I've made PRs to Docs and Taylor's like yeah, I understand this isn't documented But I kind of don't want to recommend it because this isn't good practice and so there's I've experienced that from him closing out of PRs are like submitting to Docs just because he doesn't want him in there I get it but Yeah, it's just that's what I like about Laravel's. It's opinionated and to like a</p>
        
        <p>Apple way, know, it's like he, Apple kind of does their own thing and Laravel, they, aren't completely off the deep end, but they, they are just, they kind of set that developer first mindset. And so, and that's, that's what I like about it so much. But yeah. I think we, we beat that dead horse. mean, that dead horse played it up, but, you have anything that you want to add in there? Yeah. To, to that.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=59m16s" data-turbo="false" title="Jump to 59:16 in this episode">59:16</a>)
        <br>I think I've said my two piece, my two cents. I think I've said my piece.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=59m19s" data-turbo="false" title="Jump to 59:19 in this episode">59:19</a>)
        <br>Yeah, yeah for sure. Cool,</p>
        
        <p>cool man. Yeah, I will play Dusk of Agony on our closing, but if you would like to close this out and yeah.</p>
        
        <p>Dalton McCleery (<a href="https://share.transistor.fm/s/0e80fcb3#t=59m32s" data-turbo="false" title="Jump to 59:32 in this episode">59:32</a>)
        <br>Yeah, thank you all for listening to another episode of the Midwest Artisan. That's Andy, I'm Dalton. You could find us, there's probably links in the show notes, you can find us there. If you're gonna spew hate at us because of we said about Larval on the Reddit thread, please don't. Be nice about it. We appreciate your time, we appreciate you listening to this. We'll see you next episode in about a month. All right.</p>
        
        <p>Andy Hinkle (<a href="https://share.transistor.fm/s/0e80fcb3#t=59m55s" data-turbo="false" title="Jump to 59:55 in this episode">59:55</a>)
        <br>And here's your treat</p>
        
        <p>for Dusk of Agni. See you folks.</p>
              </section>
        </div>
</x-app>
