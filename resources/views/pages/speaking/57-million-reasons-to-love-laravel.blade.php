<x-app>
    <x-slot name="seo">
        <title>57 Million Reasons to Love Laravel</title>
        <meta name="description" content="We dive into a wide array[] of topics, from Laravel's exciting $57 million funding to the buzz around FluxUIs pricing drama and the much-anticipated features coming in Inertia 2.0.">
        <meta property="og:title" content="57 Million Reasons to Love Laravel">
        <meta property="og:description" content="We dive into all things post-Laracon! Andy shares his wild adventure just getting to Dallas with a few unexpected twists and turns along the way. We break down the highlights from Laracon, including the exciting announcements about Laravel Cloud and the amazing talks that left us inspired and ready to code.">
    </script>
    </x-slot>

    <p class="text-white/75 text-center text-sm py-2 font-sans">September 11th, 2024</p>
    <h1 class="text-3xl md:text-5xl font-bold text-white text-center font-sans">57 Million Reasons to Love Laravel</h1>

    <div class="max-w-3xl mx-auto mt-8">
        <div class="px-4 pb-10">
            <iframe width="100%" height="180" frameborder="no" scrolling="no" seamless="" src="https://share.transistor.fm/e/e7373431?color=1F2937&background=101827"></iframe> 
        </div>

        <div class="px-4 prose prose-lg dark:prose-invert">
            <div>In this episode, Andy and Dalton dive into a wide array[] of topics, from Laravel's exciting $57 million funding to the buzz around FluxUI’s pricing drama and the much-anticipated features coming in Inertia 2.0. <br><br>Along the way, they explore the need for a modernized PHP documentation (shoutout to Tim McDonald for his work!), a fun chat about Dalton’s latest project, and... shaving and beards? <br><br>Show Links:<br>Laravel raises $57M: <a href="https://x.com/taylorotwell/status/1831668872732180697">https://x.com/taylorotwell/status/1831668872732180697</a><br>Theo: <a href="https://x.com/t3dotgg/status/1833086692565106692">https://x.com/t3dotgg/status/1833086692565106692</a><br>Caleb's Notes on Work: <a href="https://notesonwork.transistor.fm/">https://notesonwork.transistor.fm/</a><br>Tim's PHP Docs refresh: <a href="https://x.com/timacdonald87/status/1631504755225919489">https://x.com/timacdonald87/status/1631504755225919489</a><br><br>Connect with us:<br>Andy Hinkle - X/<a href="https://x.com/andyhnk">@andyhnk</a><br>Dalton McCleery - X/<a href="https://x.com/DaltonMcCleery">@DaltonMcCleery</a></div>
        </div>

        <div class="px-4 mt-8">
            <iframe class="w-full h-96" src="https://www.youtube.com/embed/mFW3ACyDM1s?si=gi91zCRSAsPEbj2J" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <h2 class="text-2xl font-bold text-white text-center mt-12">Transcript</h2>

        <div class="px-4 prose prose-sm dark:prose-invert">
          <div class="site-content-text site-episode-show-notes">
        
          <p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=0m2s" data-turbo="false" title="Jump to 00:02 in this episode">00:02</a>.177)
<br>Welcome to another episode of The Midwest Artisan. I'm your host, Andy Hinkle.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=0m7s" data-turbo="false" title="Jump to 00:07 in this episode">00:07</a>.687)
<br>and I'm your co -host, Dalton McCleary.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=0m10s" data-turbo="false" title="Jump to 00:10 in this episode">00:10</a>.712)
<br>Together we are two Laravel developers from the Midwest United States and we talk, I already said Laravel, but yeah, we talk Laravel, PHP, tech, anything happening that's exciting in the web dev industry. So Dalton, how's it going?</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=0m25s" data-turbo="false" title="Jump to 00:25 in this episode">00:25</a>.236)
<br>Andy, it's going pretty good for me. can't complain. Nice weather. We're getting into fall. It's really nice outside. I'm loving it. I'm loving it. How about you? What's, how you been up to?</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=0m32s" data-turbo="false" title="Jump to 00:32 in this episode">00:32</a>.419)
<br>great.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=0m37s" data-turbo="false" title="Jump to 00:37 in this episode">00:37</a>.998)
<br>I've been struggling, dude. Yeah. Yeah, we got back from COVID. We usually travel over Labor Day weekend. to Disney World, our baby boy and he had a great time. Came back, got COVID. That's whole thing. yeah, I feel much better today. So back in the saddle, feeling good. So I reached out to some, some Laravel peeps and they also said they got COVID. So honestly, I've been all over the United States. It could have been from anywhere, but.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=0m40s" data-turbo="false" title="Jump to 00:40 in this episode">00:40</a>.926)
<br>no.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=0m58s" data-turbo="false" title="Jump to 00:58 in this episode">00:58</a>.1)
<br>Yup.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1m6s" data-turbo="false" title="Jump to 01:06 in this episode">01:06</a>.388)
<br>It's still a thing, it's going around unfortunately. yeah, I was dead to the world on Saturday, Sunday I was feeling little better. Now I'm back in Saddle and ready to rock, so I'm feeling good.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1m6s" data-turbo="false" title="Jump to 01:06 in this episode">01:06</a>.537)
<br>Hmm.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1m13s" data-turbo="false" title="Jump to 01:13 in this episode">01:13</a>.768)
<br>No.</p>

<p>ready to go. Yeah. Dang man. That's rough. We, me and my wife had it at one time and I felt like I was going to die. Like just laying in bed. One of us had the bed. One of us had the couch. It's not fun. Not fun at all. I do not envy your weekend. I mean, Disney sounded great. afterwards, probably not, not the great capstone to that, to that vacation.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1m35s" data-turbo="false" title="Jump to 01:35 in this episode">01:35</a>.092)
<br>yeah.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1m40s" data-turbo="false" title="Jump to 01:40 in this episode">01:40</a>.088)
<br>That was...</p>

<p>No, it's like we spend so much time with the kiddo and then we get back and of course he's wanting to tackle and play with me and he just, I can see him pointing across the room like, da da, and you know, can't come up and touch him or anything and it's just, yeah, heartbreaking as a dad, you know, so. Yeah, all right, man. So yeah, do you see Laravel's special announcement? Wasn't that fantastic? 57 million funding. So.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=2m6s" data-turbo="false" title="Jump to 02:06 in this episode">02:06</a>.799)
<br>yeah. They got big money now.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=2m14s" data-turbo="false" title="Jump to 02:14 in this episode">02:14</a>.148)
<br>Yeah, we'll add it to the show notes if you haven't read up on it, but it's pretty big news if you live it under a rock, if you haven't heard it, but Accel partnered with Laravel and for funding for $57 million into a build Laravel's initiative into Taylor's new projects. so very exciting stuff. This is also the same company that has backed Vercel. So I know it's Accel but also Vercel.</p>

<p>It's get stripped up there. Also, they funded Sentry, which I got to thinking the other day. just have, know, laying in bed, you have all the time in the world, but you can't really move around. But I was thinking about this, how Sentry recently partnered with Laravel on Forge and Vapor. You know, I saw that thing and they're like, hey, just a click to install installation. I was like, that's interesting because then it makes sense of why they partner now because of their funding partnership.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=2m52s" data-turbo="false" title="Jump to 02:52 in this episode">02:52</a>.761)
<br>Yeah.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=2m59s" data-turbo="false" title="Jump to 02:59 in this episode">02:59</a>.921)
<br>Mm -hmm. Mm -hmm. Yeah.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=3m12s" data-turbo="false" title="Jump to 03:12 in this episode">03:12</a>.824)
<br>Yeah, it's a very exciting times for them.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=3m13s" data-turbo="false" title="Jump to 03:13 in this episode">03:13</a>.578)
<br>They're building up that apple walled garden now. You're get in this Laravel ecosystem and it's gonna be so good you don't wanna leave.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=3m24s" data-turbo="false" title="Jump to 03:24 in this episode">03:24</a>.014)
<br>Yeah, I'm very excited for them. Yeah. And there are just so much potential to come out of this. It just gives them a lot more opportunity. And I personally think Taylor didn't have to do this if he wanted. He could do it with his own team. But I think the people that are coming in to help, they have proven work. They have proven portfolios that have worked for sell a Sentry. Huge companies that</p>

<p>They have a great backing. have all those partners that they can talk to. can link up with, and ask, you know, ask opinions and stuff. So I think it's a really great thing for the Laravel ecosystem. A lot of people on Reddit and Twitter, there's a lot of people in the bubble of they were excited. Like this is good. And there's a lot of people like, no VC. This is scary. Well, you know, the 40 % of VCs drop out, they, they go, you know, they lose their funding and</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=4m16s" data-turbo="false" title="Jump to 04:16 in this episode">04:16</a>.414)
<br>Yeah.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=4m22s" data-turbo="false" title="Jump to 04:22 in this episode">04:22</a>.446)
<br>We all have seen VCs take control of companies and run amok. mean, there's a certain database company that a, a level, member or, or, sorry, a level team. Wait, sorry. I'm trying to come up with the word. Yeah. There's a certain level community member that, you know, got, that was departed from. So that was like, so</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=4m39s" data-turbo="false" title="Jump to 04:39 in this episode">04:39</a>.561)
<br>community member I think.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=4m51s" data-turbo="false" title="Jump to 04:51 in this episode">04:51</a>.189)
<br>I'm losing my words, I'm gonna have to redo that.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=4m52s" data-turbo="false" title="Jump to 04:52 in this episode">04:52</a>.668)
<br>Yeah, yeah, no, it's it's it's both scary and it's both great. I mean if if you watch the if you watch the Laravel Special announcement video it's but Taylor basically was saying that You know, they could have just played it safe Crews like they've been doing or they could try to hit it big and do some of these bigger projects like cloud and Some of the stuff that we'll talk about a little later that they're that they're teasing for Laracon AU</p>

<p>So I mean, you can't really blame them. You could coasts. I Laravel's great. It's always been great. But if you want to push the boundaries and innovate, you basically need more money. So I mean, I get why they're doing it and I'm all for it. I mean, if it's gonna make stuff like cloud and whatever else they're gonna do, I'm here for it. You can call me a Laravel fan boy all you want because that's what I am, I guess. I mean, it's given me the career that I've wanted.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=5m42s" data-turbo="false" title="Jump to 05:42 in this episode">05:42</a>.115)
<br>Mm</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=5m50s" data-turbo="false" title="Jump to 05:50 in this episode">05:50</a>.336)
<br>It pays my bills. So I mean if they're gonna improve my experience and By default the clients that I work on experience Let's do it. I mean, let's give them more. Why don't we just round it to 60? Why do we got to stop at 57? You know what I mean?</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=6m7s" data-turbo="false" title="Jump to 06:07 in this episode">06:07</a>.796)
<br>Yeah, it's kind of interesting how they got like, you know, when I see these kind of numbers that will like when I see a trade in football it'll be like 57 or or you know kind of You know those numbers like you know, just kind of wonder how they even got to that number but it's You know either way it's it's crazy numbers out there but it makes you really excited to be just a part of the community of Like you like you said Taylor could have simply said to kind of coast to doing the next the kind of</p>

<p>make these small iterations over the next years, Laravel would have been fine. But the fact that, he just said, let's go all in, let's, let's do this thing and let's build this stream thing that, you know, where this thing I've been dreaming of and makes you so excited to be a part of it and just be a part of the community. So.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=6m39s" data-turbo="false" title="Jump to 06:39 in this episode">06:39</a>.636)
<br>Mm</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=6m53s" data-turbo="false" title="Jump to 06:53 in this episode">06:53</a>.952)
<br>Yeah, 100%. I'm excited to see what else they're going to announce. And we'll talk about that a little later as well. Super pumped.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=7m1s" data-turbo="false" title="Jump to 07:01 in this episode">07:01</a>.358)
<br>Yeah. And it, it's starting to make a, so Laravel is with this news, it's starting to make its rounds in the love, the web dev industry and, like Prime Engine, went to Laracon talked about, you know, great things. He talked about just the community, how great they were. and then I was listening to, it either a video or a live stream he had going on the other day, but he was saying that he wants to build, prime engine dot TV.</p>

<p>so it's going to be like, I don't know if it's a new app or he's working on or something, but he's going to build that in Laravel. And so he's like, it doesn't matter what it's going to be written in. He's like, I want to put it in Laravel, you know, give it a shot. So it's really, it's just really crazy how it's kind of Laravel is making it to like the mainstream web dev, these days. So I don't, and, you know, us being developers, I don't, personally don't care about that. I just like, well, that's exciting and cool that you're using it. Just kind of.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=7m57s" data-turbo="false" title="Jump to 07:57 in this episode">07:57</a>.838)
<br>Yeah, that's cool.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=8m0s" data-turbo="false" title="Jump to 08:00 in this episode">08:00</a>.152)
<br>gets the word out more, but I hope people like it. I feel like I've moved faster in Laravel than I've worked anywhere else in any other tech. That's what gets me so excited about it. But yeah, we're always open arms and just, come on in. The community is great. We'll help you out. but speaking of that, so speaking of like the community being great, did you see like Theo's tweets last night? It's like a tweet rampage. So.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=8m16s" data-turbo="false" title="Jump to 08:16 in this episode">08:16</a>.669)
<br>Yes.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=8m21s" data-turbo="false" title="Jump to 08:21 in this episode">08:21</a>.922)
<br>Ha ha.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=8m26s" data-turbo="false" title="Jump to 08:26 in this episode">08:26</a>.828)
<br>So Theo GG had posted, he's been trying out Laravel, he read the docs and he had some issues with, I guess, getting set up. installed Herd and I think like he already had Homebrew on his system and it blew up his system or something, but it like took out his Git.</p>

<p>And so he couldn't even commit, make changes or anything, which I have been there. I think every developer has been there. That's the most frustrating thing where you can't even write a commit or it's all like, you're, you're in home brew hell. And so I felt really bad for him. was like, man, this is really tough, but he was just kind of going on and, some of his comments were really kind of derogatory. It was like, he had one thread he would, you'll be really, he would be like, some of his comments were really helpful.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=8m58s" data-turbo="false" title="Jump to 08:58 in this episode">08:58</a>.707)
<br>Hahaha.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=9m19s" data-turbo="false" title="Jump to 09:19 in this episode">09:19</a>.468)
<br>For me being a contributor to the documentation and stuff. I'm like, yeah, he's right. There is no mention of brew or no mention of like, Hey, if you've been, if you have a home brew already set up, maybe you should do it this way. But, those are comments are really helpful, but some of them are just like, like for example, he's, he's like, also for the love of God, please use prettier and have a default config or hold my hand through setting it up.</p>

<p>the hell I experienced with, with blade and VS code extensions deserves a thread of its own. And I'm just, and then the next one's like, I thought the Laravel community was friendly, you know, cause some of the responses like, dude, settle down. Just want to offer him a Snickers bar, you know? It's like, And so, but yeah, mean, some of the feedback is really good, but it's just like, a lot of it is just like, you just have to try it out. some of it.</p>

<p>It was interesting. want to get curious on your thoughts here. He's like, I've never, one of the comments he made kind of stuck with me about, said, I've never seen a framework. not going to get this exact, but I've never seen a framework or something so quick to say, purchase this, purchase that, and all your product, all your problems will be solved because you know, he was like complaining about. VS code and people are like, use PHP storm. He's like, okay. Well, that's what $250 a year. And so.</p>

<p>And then, and then they're like, by the way, you need Laravel idea. And that's another, you know, stacking money, you know? So, and then Laravel Herd that's where it all started. The original tweet that got this all like all up on, in a fuss on Reddit, which I had blown up. I woke up this morning with like seven moderator notifications of people reporting comments for just on, on this, on this thread. So yeah, it was nasty, but</p>

<p>One of the, how it started was he posted something about like, Laravel is so ridiculous about with Herd, like that's the thing they promote and say, just to have logging is you have to go have pro. And it's like, well, not quite, you know, it's just, that's like a, it's like one of those things you have to be in Laravel ecosystem understand, you know?</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=11m35s" data-turbo="false" title="Jump to 11:35 in this episode">11:35</a>.967)
<br>It's a nice to have. It's a feature, not a bug. But it's an optional feature. Yeah, optional.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=11m39s" data-turbo="false" title="Jump to 11:39 in this episode">11:39</a>.268)
<br>It's like a log viewer, right? I mean, yeah, every, there's so many different ways of you logs from different ecosystem, like how you would view one in Ruby or even a node, you can, it's a log file, however you want to look that up, it's up to you. So yeah, it was interesting. I don't want to get too much. don't like to dive into drama like that, but it was, I was just like, some of the feedback was really good.</p>

<p>now but it's just how Laravel is becoming more mainstream. You see a lot more feedback these days.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=12m10s" data-turbo="false" title="Jump to 12:10 in this episode">12:10</a>.344)
<br>Yeah. I mean, I can understand some criticisms. Like if, the docs don't explain something very well or they quote unquote forget something about, you need brew or the recommended ways to use herd versus valet or something like that. Like that's fine. But a lot of those things are, like personal preference. Like you could use valet or you could use herd, but yeah, don't, criticism's fine. Right.</p>

<p>It's fine to criticize something. It's just, it's odd to be mean about it. If I'm, if I can put that into nice words, like, like you don't see us just crapping on, Symphony or, something of that nature, even though those docs aren't very great either, but you didn't hear that from me. Well, you know, like don't yuck my yum is what I keep thinking about every, every time I'm looking at his tweets is like,</p>

<p>Yeah, I get it. You know, that might suck. That might be a little difficult. You know, we were, so used to the Laravel documentation. I don't think I've read the getting started docs in years, so I don't even know what they look like anymore. But yeah, some of these, some of these tweets and comments are, are in very poor taste in my opinion, in my opinion.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=13m21s" data-turbo="false" title="Jump to 13:21 in this episode">13:21</a>.357)
<br>Mm</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=13m30s" data-turbo="false" title="Jump to 13:30 in this episode">13:30</a>.276)
<br>Yeah, some, can be pretty, pretty helpful in some cases of getting fresh eyes. And Taylor's talked about this, about getting fresh eyes on the whole documentation about someone either from a different ecosystem or just somebody learning Laravel for the first time where we've been doing it for 10 years now. And it just like seeing, somebody coming in with fresh eyes and like, yeah, well we've been, we've been using Ray for years now or, or been using.</p>

<p>heard pro or whatever the case is, whatever your taste is. it's interesting to see the fresh new take that's coming in. So that will be really helpful as we go throughout the future of the documentation.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=14m17s" data-turbo="false" title="Jump to 14:17 in this episode">14:17</a>.533)
<br>Yeah, just be nice. Don't be distasteful. Criticism is welcome. We can take criticism. Just be nice about it. Don't be an a -hole.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=14m29s" data-turbo="false" title="Jump to 14:29 in this episode">14:29</a>.028)
<br>Speaking of being a -holes, I don't want to dive into the drama, but Flux was another one of, it came out, it's a hundred bucks for one, it was one project for one year, which I know can be little tight. It reminded me a lot of Nova's prices, which I didn't have a problem with, but I guess it got to thinking about, I listened to Caleb's podcast and he described the situation and I was like,</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=14m30s" data-turbo="false" title="Jump to 14:30 in this episode">14:30</a>.847)
<br>Back to back!</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=14m57s" data-turbo="false" title="Jump to 14:57 in this episode">14:57</a>.934)
<br>He kind of has a good point. Like I understand what some people can be frustrated about. So imagine like, you you're, you're billing the client. like, what is flux? Like, what is this one hundred dollar line item? Then you have to go explain that. And then, if it was me, I would just include it into my cost as a, as a developer and just say, Hey, this was included in the programming costs. And they wouldn't even question it, but it's just like,</p>

<p>You have to, for those that do have to explain that it's this, it's a UI library. Well, what is that? Like, well, what? Yeah. Just having to explain that to clients. I completely understand. Yeah. So, he came out with some, he came out with like three different podcasts and they're all great. I don't know if you listen to them, notes on work.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=15m30s" data-turbo="false" title="Jump to 15:30 in this episode">15:30</a>.452)
<br>Why? Yeah. What am I paying you for?</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=15m45s" data-turbo="false" title="Jump to 15:45 in this episode">15:45</a>.076)
<br>I listened to one with Aaron. I listened to mostly technical, which hot take that's, that's my favorite pairing of a podcast duo. Please, Aaron and Caleb, if you start a podcast together, subscriber number one, please continue.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=15m48s" data-turbo="false" title="Jump to 15:48 in this episode">15:48</a>.404)
<br>Okay, if you get a chance.</p>

<p>yeah.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=16m0s" data-turbo="false" title="Jump to 16:00 in this episode">16:00</a>.996)
<br>It's a good week when no plans to merge and mostly technical have a release. It's a good week. Unfortunately, I don't think we're going to have either one this week. the other, yeah. So yeah. And Aaron has 400 kids and a plumber. So yeah, some plumbing issues. So yeah, we'll see. But anyway, yeah, Flux, he changed the pricing.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=16m11s" data-turbo="false" title="Jump to 16:11 in this episode">16:11</a>.069)
<br>Yeah, I saw Ian was still out.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=16m19s" data-turbo="false" title="Jump to 16:19 in this episode">16:19</a>.409)
<br>Yeah.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=16m28s" data-turbo="false" title="Jump to 16:28 in this episode">16:28</a>.484)
<br>And, it's going to be like, I think it was like 149 for a solo dev. it's like a year of unlimited updates. think he kind of eliminated the, the projects. He can have a limited projects, but for a team, it's like two 49 and three 40, but it doesn't matter. mean, it's still, it's still pretty cheap for the value that you're going to get. So I know they, our agency, like the next big project, I'm definitely going to propose just, Hey, let's just use this. going to cut out a lot of time going in the future.</p>

<p>So when we do get new projects, so definitely going to put that because like I mentioned last show, how many times do we copy that app, play PHP date pickers? We fight with date pickers all the freaking time. And Caleb was talking about on no plans emerge how he just wants to go to like a cabin or something and write a date picker. You know, just like perfect. This is the this is the guy I want. Just write me a live wire date picker. I love it.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=17m22s" data-turbo="false" title="Jump to 17:22 in this episode">17:22</a>.313)
<br>Yeah, please, please. Something accessible as well, not just flashy to be flashy, it's gotta work really well.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=17m24s" data-turbo="false" title="Jump to 17:24 in this episode">17:24</a>.823)
<br>So.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=17m30s" data-turbo="false" title="Jump to 17:30 in this episode">17:30</a>.02)
<br>I DMed Caleb and I said, I can't imagine what you're going through. You know, it's kind of roller coaster of emotions. I told him that he should keep on the current path of like the $99 thing. I was like, I wouldn't change anything. But I said, but what you should do is have a discount code. And I said, the discount code is entitled, entitled, all in caps. And I said, when you enter it in, it's 50 % more.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=17m54s" data-turbo="false" title="Jump to 17:54 in this episode">17:54</a>.931)
<br>Hahaha!</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=17m58s" data-turbo="false" title="Jump to 17:58 in this episode">17:58</a>.412)
<br>Like, you add it and it doubles in price. It's like, hey, here's a discount code. Sorry about your... So he had a good laugh with that. like, so at least try to make him, maybe hopefully make him smile and cheer him up. But because I'm sure he's probably down on the dumps for being so excited for what? An eighth month project.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=17m59s" data-turbo="false" title="Jump to 17:59 in this episode">17:59</a>.977)
<br>Yeah.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=18m18s" data-turbo="false" title="Jump to 18:18 in this episode">18:18</a>.442)
<br>Yeah, I mean, pricing pricing software is weird, but I've, I've seen UI libraries that are less that are, that are just less than this costs like double. And so the fact that you're getting like a well -known creator like Caleb Porzio behind it. I think that justifies the price in my opinion. Like I get that it might be, might be high for some solo devs.</p>

<p>But if you're a solo dev and it makes your work faster, like if you could get done faster and you're, and say you're, you know, charging per sprint instead of charging per hour, you're going to make money buying this package in the long run than what you are in the short run, in my opinion. So, I mean, I, I get the drama behind it, but like, if it's going to save you hours of time, that a hundred dollars is our $150 seems worth it to me.</p>

<p>I don't know, maybe that's me being optimistic instead of pessimistic, but I see a lot of other packages that do way less than this, cost way more than this. Not to name any names, but I can send you a private DM of one in particular that I bought that has just let me down over and over and actually cost me more time to rip stuff out of it than it did to, of what it proposed to save me time.</p>

<p>Like I had to like, don't need this and why is, why is this baked in? Why do I have to use this? Get out of here. It's like this, this is not doing what it told me it was supposed to do.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=19m50s" data-turbo="false" title="Jump to 19:50 in this episode">19:50</a>.903)
<br>Yeah, for sure.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=19m50s" data-turbo="false" title="Jump to 19:50 in this episode">19:50</a>.964)
<br>Whereas I feel like Caleb is usually pretty, his track record is pretty good. Like I use Livewire every single day and I still love it. So I mean, call me a fan boy again.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=20m4s" data-turbo="false" title="Jump to 20:04 in this episode">20:04</a>.482)
<br>Yeah, I think where a lot of people that come from is that they didn't see the talk and they just see FluxUI .dev and it's just like just a few components on the homepage and then no mention of the where to go for the docs. It was just like, here's a few components. Here's where you pay. so Caleb was like, I didn't even take an account of like people would be seeing the webpage and didn't see the talk or.</p>

<p>I thought people like at Laracon would see the talk and then go to the webpage, you know, versus the other way around. And so I think that's where people got their frustrations. It like, what is this? Like just go use, go use this or go use that.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=20m47s" data-turbo="false" title="Jump to 20:47 in this episode">20:47</a>.486)
<br>Yeah, I haven't, I haven't purchased it yet. I'm, I'm, I do plan on purchasing it because if it's going to save me time, I'm, I'm all for it. I'm, one of those guys. Like I'll pay a hundred dollars to not spend four hours of my time building XYZ. Like if somebody else has already figured it out, it's well, well, well built, well documented. So no brighter for me.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=20m48s" data-turbo="false" title="Jump to 20:48 in this episode">20:48</a>.715)
<br>Yeah, people be mad.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=21m12s" data-turbo="false" title="Jump to 21:12 in this episode">21:12</a>.228)
<br>Yeah, for sure. Yeah. so last show, we kind of briefly touched on inertia 2 .0. first off, did you want to anything else on the Caleb thing?</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=21m25s" data-turbo="false" title="Jump to 21:25 in this episode">21:25</a>.865)
<br>Caleb, please start a podcast with Aaron Francis.</p>

<p>Also don't listen to the haters. Flux is cool. pricing is what it is. It's hard to price stuff. mean, take that with what you will also, like Andy's idea. Please, please do the entitled thing. Send that out in a Reddit post and then promptly block all of your messages. Yeah. Yeah. That's all. That's all else. say.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=21m42s" data-turbo="false" title="Jump to 21:42 in this episode">21:42</a>.18)
<br>people yeah, yeah, just post that on reddit</p>

<p>Yeah. Turn off notifications. Yeah. I love that. So yeah, inertia 2 .0. we briefly touched on the last show, but has a async request, polling when visible, infinite scrolling, prefetching. so there's a lot of the great things coming out of it. I'm really looking forward to, especially, think probably my favorite is prefetching.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=22m13s" data-turbo="false" title="Jump to 22:13 in this episode">22:13</a>.631)
<br>That's what I was about to ask you. Which one of those like gets you hyped the most? And it's prefetching? Okay.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=22m19s" data-turbo="false" title="Jump to 22:19 in this episode">22:19</a>.373)
<br>Yeah, probably prefetching because, so we, you know, we have some pages that are pretty heavy. they're like, there'll be like a manual pages, like a lot of content basically on a page, a lot of HTML, a lot of content switches by as they flip through pages. So, I think by, if they hover over a link, we might just be able to just that few extra milliseconds will be helpful of saving that time.</p>

<p>And I think it's kind of hard to sell that to the client of explaining that of like, we're going to do some dev work to speed things up. That's all we have to tell them. But it's just like, for them to, for us to actually get into the nuts and bolts of like what that is, it's kind of like tricky to explain like, you hover over link and Then it prefetches the page, but you know, it's just like, yeah, we're trying to explain that to, to a non -technical or non -technical client is a little tricky. So, but.</p>

<p>There, these are things that have been requested for years and inertia. It's good to see some love and there's a, what really opened my eyes is how inertia they previously previously said that it'll be a done thing or how it's going to be a solved. Yeah. Feature complete. Yeah. And there's so much that they found as they're getting into some of these things. So it's really exciting. And I know, go ahead.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=23m30s" data-turbo="false" title="Jump to 23:30 in this episode">23:30</a>.935)
<br>Feature complete.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=23m41s" data-turbo="false" title="Jump to 23:41 in this episode">23:41</a>.972)
<br>Yeah, I'm super pumped for infinite scrolling. Like I don't use inertia, but the fact that I can, I can like have some data load and then scroll down and have another piece of data load, like just to save on the separate chunks, like quote unquote under the fold, I think would be really, really cool. Especially if you then prefetch that page. So you're only prefetching that top chunk. That thing is going to be just lightning fast, lightning fast. That's what I'm.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=23m54s" data-turbo="false" title="Jump to 23:54 in this episode">23:54</a>.904)
<br>Hmm.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=24m10s" data-turbo="false" title="Jump to 24:10 in this episode">24:10</a>.771)
<br>I think I'm the most excited about infinite scrolling. Plus just anything with infinite in the name sounds cool to me.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=24m14s" data-turbo="false" title="Jump to 24:14 in this episode">24:14</a>.306)
<br>Yeah, also... Yeah, it does, yeah.</p>

<p>I also like the asynchronous request of, no, we've battled this a few times. We might have like a heavy API request or heavy backend operation and to defer that to the front end and then load it in. That's where, traditionally, like if I know going into the project, this is going to happen and I'm trying to decide between live wire or inertia. That might be my pivot point of going with the live wire. there's a million different.</p>

<p>things that I have to consider what devs are going to be working on this. If there's a project handoff to what devs they have on their team or what freelancers they have working with us about what they're comfortable with, et cetera. There's a lot of things we have to consider. But if it's just Greenfield, just me, I might go reach for LiveWire in this case if there isn't. But now it's kind of like, man, this is a tough battle. I don't know. Should I use React or Vue or?</p>

<p>with inertia or should I go live wire? So, yeah, I know Dalton's decision. Yeah. Yeah, it's.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=25m23s" data-turbo="false" title="Jump to 25:23 in this episode">25:23</a>.69)
<br>That's good. I mean, again, I don't hate inertia. I've used inertia before and I think it's great. It's just, I like writing my stuff in PHP. Like I don't like the weird, it's not like a bad context switch, but it's like, all right, here's all my PHP backend logic. Here's all my front end reactive U logic. If it's all just PHP and blade, I don't know. I'm just faster that way and I don't have to wait for like.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=25m36s" data-turbo="false" title="Jump to 25:36 in this episode">25:36</a>.874)
<br>Mm</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=25m53s" data-turbo="false" title="Jump to 25:53 in this episode">25:53</a>.695)
<br>builds and junk like that. but options is great. Like this is like the difference between picking an iPhone 16 and an iPhone 16 plus. Like they're basically the same phone, one just a little bigger with a bigger screen or some, something like that. That's how I view inertia versus like live wire. You can't go wrong either way. It's going to be a great product. Just a flavor, pick your flavor.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=26m18s" data-turbo="false" title="Jump to 26:18 in this episode">26:18</a>.235)
<br>Yeah, both are great choices. Yeah. I feel like if you, you know, as long as you're picking one, you know, if you're, if you're going just vanilla blade with something, you might be okay. But, but then, once you get out of that, like people, you don't really hear this much, but except for some legacy apps, you might have to rescue of like an SPA with the react router and who or, you know, something like that. Be careful, but it might want to migrate to inertia. but yeah.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=26m40s" data-turbo="false" title="Jump to 26:40 in this episode">26:40</a>.103)
<br>Oof. Oof.</p>

<p>I have, I have PTSD from that actually. Cause I, that's, that's what I had was I, this was before like react or before inertia even had like server side rendering. had built a react react Laravel application with custom SSR, like having the whole client file and the whole server file. And then you got to make all sure that all your components don't use the window attribute and all that other junk. So I did upgrade that app from.</p>

<p>chaos to inertia and I've never been happier. That's like the one inertia site that I have in production is that one. And it was just like add one flag for SSR and the site looks the exact same. Like nobody even noticed a difference. Upgraded it to Laravel 11. The client's like, yeah, everything works. No, no QA needed. I was like, yes, score one for inertia.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=27m37s" data-turbo="false" title="Jump to 27:37 in this episode">27:37</a>.315)
<br>Wow, love that. Yeah, it's so good.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=27m46s" data-turbo="false" title="Jump to 27:46 in this episode">27:46</a>.626)
<br>All right, so would you like to move on to, you want to cover the next one?</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=27m53s" data-turbo="false" title="Jump to 27:53 in this episode">27:53</a>.567)
<br>Yeah. So I mean with, with inertia 2 .0 that's nice. And the, the 57 million from Accel. It's really nice. So I'm very curious on what your thoughts are because we talked about it last time. What, what else is Laravel building in secret? What are they doing behind the scenes? They got 57 million. They got 30 plus employees now they've, they've announced cloud. That's already going to be a huge undertaking.</p>

<p>But you know, in Taylor's talk, he did that little, smile wink. We got more planned for AU and, we think that it's going to be what we talked about last time, which is sort of your event tracker. But, but is it though? Do you think like, what are they doing back there?</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=28m41s" data-turbo="false" title="Jump to 28:41 in this episode">28:41</a>.636)
<br>I'm curious what you think first of all, you're like, is it? So what's your take? do you think? You think they're building an NFT trading company over there?</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=28m52s" data-turbo="false" title="Jump to 28:52 in this episode">28:52</a>.635)
<br>No, I hope not. I hope not. Please don't do that Taylor if you're listening no NFTs, please Yeah, I'm I'm I Don't know I really don't know I don't I know that it has to be something I'm assuming that it has to do something with Laravel cloud like how they have They partnered with Sentry like you mentioned before so now in forage you can just do that one little toggle and now you've got Sentry or whatever</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=28m57s" data-turbo="false" title="Jump to 28:57 in this episode">28:57</a>.685)
<br>I'm not getting any FTs. What do think?</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=29m20s" data-turbo="false" title="Jump to 29:20 in this episode">29:20</a>.67)
<br>I'm thinking that it's going to be something similar for cloud. You're to be in cloud. You can have a site and you're have this little toggle that turns on whatever it is that they're building here, which I assume is going to be some sort of monitoring analytics thing. What it monitors and what it does. I am, I'm very curious. I don't know. I don't know what else that's, that's what I'm thinking that it's, it's gotta be something in that nature. Does that match what you're thinking?</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=29m41s" data-turbo="false" title="Jump to 29:41 in this episode">29:41</a>.282)
<br>Yeah.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=29m47s" data-turbo="false" title="Jump to 29:47 in this episode">29:47</a>.138)
<br>Yeah, if right, if they don't build this, I will, because I want it so desperately. And, for, for like, there's a couple of different projects, even in personal sites I had, yeah, well let's get into it. So what I think it is is I talked to this about previous show, but just to catch people up, I think it, it's a service that monitors every aspect of your Laravel application from every event. And so, that would be.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=29m51s" data-turbo="false" title="Jump to 29:51 in this episode">29:51</a>.487)
<br>You should.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=30m15s" data-turbo="false" title="Jump to 30:15 in this episode">30:15</a>.447)
<br>from every request that is happening on your application to the logged in logged out event to anything in the illuminate events area that Laravel does under the hood. It just automatically captures and then additional on top of that, you can maybe add some manual events for tracking on their on the service. So it's very similar to Laravel pulse, but more of a SASS version of that and</p>

<p>Because there's been some things from layer of a pulse that I've been wanting for like email notifications like when When a slow query happens when I want to get an email about it Or get like maybe a weekly report. That'd be great because then I can come to the client say hey We we notice this data tables having some issues We're gonna spend X amount of time on trying to improve it etc. And so There we currently do this now and it's the code. I'm not proud of and</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=30m49s" data-turbo="false" title="Jump to 30:49 in this episode">30:49</a>.332)
<br>Hmm.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=31m13s" data-turbo="false" title="Jump to 31:13 in this episode">31:13</a>.731)
<br>It's not terrible, it's in a middleware, but how it works is it just, yeah, it's just an appended middleware and then it logs pretty much anything and everything and just like from requests that come in through the application to login events like I just discussed. And it's all through CloudWatch and how to create these crazy dashboards, how to learn CloudWatch and...</p>

<p>the AWS system, it's good. And then I was like trying to figure out email notifications and there's, can't send yourself, you have to like pipe it into an application to send you an email notification, if that makes sense. Like you can set up, you can set up like notification events in AWS, but you have to tell it, you have to point to where you want it to go. can't just say, Hey, SES send me an email or whatever. You have to go and tell your application that this event happened and then application has to turn. So there's this all this</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=32m2s" data-turbo="false" title="Jump to 32:02 in this episode">32:02</a>.409)
<br>You</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=32m9s" data-turbo="false" title="Jump to 32:09 in this episode">32:09</a>.271)
<br>this ping pong going on, your application has an exception or has some event that shouldn't have happened, whatever that you want to be notified about goes to CloudWatch. CloudWatch says, OK, I'll log that of it. Now I need to figure out how to process it. we need to notify Andy that this happened. OK, well, I'm going to go to that notification chain. I'm going to go back to the application. Application goes, OK, I'm going to go back to AWS and go to SES and send you an email. It's just.</p>

<p>Way over complicated, right?</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=32m40s" data-turbo="false" title="Jump to 32:40 in this episode">32:40</a>.101)
<br>super inefficient, yeah.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=32m42s" data-turbo="false" title="Jump to 32:42 in this episode">32:42</a>.23)
<br>So, and pulse, like pulse is great. You can install pulse, but you won't ever get notified. You, kind of have, it's one of those things you go in after the fact, which that's not, they didn't advertise it as like, this is something you, you know, that you're going to be constantly, you know, monitor or that you're being constantly notified about. You have to go in and monitor, you know, monitor on your own. it's kind of like a post event kind of thing, like, I'm going to go check out what happened for this user or.</p>

<p>this case, see what happened. or if they're having slowed down, if they're having a slow, if the application is slow, you can go into pulse and see what's going on, see how many requests you're getting stuff like that. So yeah, what I'm getting at is we have all this tracked in, in AWS cloud watch. I would love just to have like a, a super simple service, like I composer install it. You plug in your, your API key. And this is where it of gets interesting to me. So.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=33m23s" data-turbo="false" title="Jump to 33:23 in this episode">33:23</a>.177)
<br>Yeah.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=33m41s" data-turbo="false" title="Jump to 33:41 in this episode">33:41</a>.214)
<br>If I. It'd be kind of neat if I didn't even have to composer install it. That's what I'm kind of thinking like. There'd be pretty wild if they could make this happen. But if I was in vapor or forge or Laravel Cloud , I check a box and said boop, we got it. You we were tracking all your stuff. Now if you wanted to get more granular of like you want to track specific events, that's when you might reach for composer package and then you say hey, by the way, I want to go ahead, track this custom event or but.</p>

<p>whatever the case is, you can set up, I'm dreaming here, this, you can set up notifications. I would email you. I really hope they're working on this. If it's not what they're working on, I'm going to be pretty shocked. mean, honestly, I now they have not, I don't, and I don't know any of the internals. I haven't talked to any Laravel employees about this. This is all just been me, me and you thinking about this. So, yeah.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=34m35s" data-turbo="false" title="Jump to 34:35 in this episode">34:35</a>.13)
<br>Yeah.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=34m38s" data-turbo="false" title="Jump to 34:38 in this episode">34:38</a>.936)
<br>That's a that's kind of my take of what I think it's going to be. And because we've I've battled this even I mentioned at the top of this at the top of like even for personal projects, I could use this. I have a personal project now where the client asked me to build a form, built it out for him and to like a sign up for an event. Right. And they're like, I emailed this to to a customer, told him to fill it out.</p>

<p>and they said they got an error and check the exceptions, nothing. And just like, well, okay. And so, and I was thinking in my head, like if I set this up to be at least monitored in CloudWatch, I know at least I could understand if they hit the page or if they hit a 422, what 422 it was. But the fact that it's...</p>

<p>We don't know what they get just like, they hit, there's no exception here. I'm just like, well, they're going to have to try it again. don't, I don't see their record. So it can be frustrating. And then I, you know, I look like it's not that when I go back to the client and be like, I don't really know. Sorry, but I don't have anything in the log, you know, and this gets a little bit more deeper into that and solves those kinds of problems. So hopefully it'll solve some like that. And yeah, I do.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=35m40s" data-turbo="false" title="Jump to 35:40 in this episode">35:40</a>.745)
<br>Thank</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=35m50s" data-turbo="false" title="Jump to 35:50 in this episode">35:50</a>.033)
<br>Yeah.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=36m2s" data-turbo="false" title="Jump to 36:02 in this episode">36:02</a>.347)
<br>At least the hints that, let's just go with the hints that they've been giving us, right? Big data, obviously. They've, Jess Archer has been, he's kind of hinted that Jess Archer has been kind of leading or kind of been working a lot on this project. She did a talk about analytical databases, about very heavy, a lot of data. Taylor himself has said for the thing that we're building, we're going to need something very large that can handle large amounts of data.</p>

<p>so, so we're obviously dealing with big data sets here. So a lot of data tracking. just makes sense to me. It's just an analytic platform for the monitoring you're back in.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=36m44s" data-turbo="false" title="Jump to 36:44 in this episode">36:44</a>.159)
<br>Yeah, it's gotta be something like that. mean, would they do some sort of Google Analytics alternative? Could it be something like that where you're tracking user events and user exceptions at the same time? Like this user is on this journey, clicking these buttons, visit this page, submitted this form, got this error, resubmitted it again, didn't get an error, sent this email. Something of that nature. Or, I mean, as you were talking, it's like,</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=37m7s" data-turbo="false" title="Jump to 37:07 in this episode">37:07</a>.235)
<br>Mmm.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=37m13s" data-turbo="false" title="Jump to 37:13 in this episode">37:13</a>.779)
<br>Man, I know people don't really like to talk about AI in the dev space because they think that it's going to take our jobs or whatever it is from that South park episode. But I mean, it could be, could be some AI, AI stuff. Like, they going to learn how to</p>

<p>I don't know. I don't, I don't want to give away any, any things that would take away my job, but yeah, the big data sets makes me think analytics of some kind. They're to be tracking something for us. I love what you said. If, if I didn't have to compose or install it, like if I'm on cloud, I can just check this box. It's sort of takes its own arms, wraps it around my application and it just does it for me. I mean, I would love that kind of like how Vercel does some of their, their monitoring stuff. I don't have to install packages for that.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=37m34s" data-turbo="false" title="Jump to 37:34 in this episode">37:34</a>.2)
<br>Yeah.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=37m50s" data-turbo="false" title="Jump to 37:50 in this episode">37:50</a>.211)
<br>That'd be great.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=38m3s" data-turbo="false" title="Jump to 38:03 in this episode">38:03</a>.777)
<br>Yeah.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=38m3s" data-turbo="false" title="Jump to 38:03 in this episode">38:03</a>.828)
<br>But yeah, it's, it's gotta be something analytics based and it's going to be tracking some sort of events or all.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=38m8s" data-turbo="false" title="Jump to 38:08 in this episode">38:08</a>.205)
<br>Theoretically, wonder.</p>

<p>You get the we get the developer developer mindset pretty quickly. I'm like theoretically how could you do that? know because it's like once it's on there of a cloud and you brought in all these packages Have you checked a box there could be like a conditional? if they check that box and then composer install this but then if they do a push then cut composer uninstall it it gets really kind of messy right because you don't want it to you don't want to fight your composer lock file or or is even a composer package at that point you just Draw, I don't know it gets super complex</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=38m38s" data-turbo="false" title="Jump to 38:38 in this episode">38:38</a>.569)
<br>Yeah. What if it's just a, just an executable that they just place on your Laravel cloud instance that they can just say, Hey, is this executable available? All right, cool. We're gonna, we're gonna run this little patch of code or something like that. Like if it's, if it's cloud, you know, they're going to, they're doing the Apple thing where they're, they're going to control both the software and the hardware, right? So if the hardware is cloud and the software is Laravel, they're going to have to have their own little special ways to make, make that magic connect.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=38m44s" data-turbo="false" title="Jump to 38:44 in this episode">38:44</a>.835)
<br>Mm</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=38m51s" data-turbo="false" title="Jump to 38:51 in this episode">38:51</a>.296)
<br>Mm. Yeah. It's like a process. Yeah.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=39m8s" data-turbo="false" title="Jump to 39:08 in this episode">39:08</a>.381)
<br>Between those two, I'm hoping it's going to be something super easy like that. Just a little checkbox. Boom. They can charge me whatever it is a month to sort of host that data set. But if it's good, hell yeah, I'm going to use it. I'm already going to use cloud. I'm ex I'm excited for that. I've got, I've got projects. I want to host on it right now. As a matter of fact.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=39m10s" data-turbo="false" title="Jump to 39:10 in this episode">39:10</a>.125)
<br>Mm</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=39m22s" data-turbo="false" title="Jump to 39:22 in this episode">39:22</a>.499)
<br>What is a l -</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=39m30s" data-turbo="false" title="Jump to 39:30 in this episode">39:30</a>.436)
<br>Yeah, yeah, same here. Yeah, yeah, I talked to a previous show about migration, but yeah, I need new projects. So we're definitely gonna be reaching for that. I just Googled it for Laracon AU. It's November 7th and 8th. So there's tickets still available. I'd love to go if it wasn't so far away. Dude, flying to Australia I heard is a wild ride. Yeah, like 20 hours.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=39m50s" data-turbo="false" title="Jump to 39:50 in this episode">39:50</a>.335)
<br>Yeah, you're getting on a plane for 20.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=39m55s" data-turbo="false" title="Jump to 39:55 in this episode">39:55</a>.839)
<br>I don't like flying, I don't like heights. So I mean, to me, flying from, you know, like Louisville, and yes, it is pronounced Louisville, Louisville, Kentucky to like California was like four hours. Hated every minute of that. So I could not imagine flying 20 plus hours to Australia. Plus they got big spiders down there and I don't like spiders.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=40m13s" data-turbo="false" title="Jump to 40:13 in this episode">40:13</a>.667)
<br>that far,</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=40m18s" data-turbo="false" title="Jump to 40:18 in this episode">40:18</a>.659)
<br>There's so many great people coming. I mean, we have Matt Stouffer and Dave Hicking from the userscape And Keith From Tighten Yeah, there's just so many like friendly people like these are people from mostly from Australia Well, obviously those people I just listed aren't from Australia, but there's several people in here that are like that Like Steven Reece Carter</p>

<p>There's so many people I was like really excited to meet they're probably thinking the same thing like United States. That's a far far flight And Taylor gonna be there too,  So I got the you're talking about like long flights the the Laracon India organizer he was out Laracon us he came up to me and He was like, I know you from somewhere. It's like not I'm not sure maybe said he's like are you on Twitter and</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=40m53s" data-turbo="false" title="Jump to 40:53 in this episode">40:53</a>.05)
<br>Yeah.</p>

<p>Yes, yes, the man himself.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=41m15s" data-turbo="false" title="Jump to 41:15 in this episode">41:15</a>.608)
<br>I like, yeah, and it turns out we follow each other. And he's like, you need to come speak at Laracon India. I was like, I've never even done a Laracon talk or even online talk or anything like that. I was like, look, and he's like, just like, you should just submit a talk. Like we would love to have people like you out there. I was like, okay, well, so maybe not this year or this coming Laracon India, but that'd be a wild ride, wouldn't it? Just to India. I heard.</p>

<p>The culture there is just so much different, which I think would be fun, but who knows.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=41m47s" data-turbo="false" title="Jump to 41:47 in this episode">41:47</a>.815)
<br>It would definitely be culture shock for you as someone who is a vertically not challenged. Would stick out quite a bit in that crowd.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=41m52s" data-turbo="false" title="Jump to 41:52 in this episode">41:52</a>.373)
<br>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=41m58s" data-turbo="false" title="Jump to 41:58 in this episode">41:58</a>.839)
<br>I thought you were gonna say for my diet, because you know my horrendous diet. I've been known for being one the pickiest eaters that people know. so, I'm just a meat and potatoes kind of guy, like very Midwest.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=42m1s" data-turbo="false" title="Jump to 42:01 in this episode">42:01</a>.988)
<br>well, I mean...</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=42m12s" data-turbo="false" title="Jump to 42:12 in this episode">42:12</a>.531)
<br>Midwest guy. Come on. You like corn though, right?</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=42m14s" data-turbo="false" title="Jump to 42:14 in this episode">42:14</a>.423)
<br>I went to, yes, well, corn's okay, sweet corn. Sweet, it has to be sweet. It has to be sweet corn. Okay, I went to Italy for like two weeks and I got back and we landed in Chicago. First thing I did, got off a plane, walked immediately over to like the closest burger shop. Like, know, I miss my hamburgers. I'm a true American.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=42m17s" data-turbo="false" title="Jump to 42:17 in this episode">42:17</a>.127)
<br>Okay, that's a right of passage. I like any kind of corn.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=42m37s" data-turbo="false" title="Jump to 42:37 in this episode">42:37</a>.343)
<br>Yeah, yeah, yeah. No, not saying that you're one of those guys that gets MacDonald's in like the UK or London, but I would. I want to try MacDonald's in London.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=42m46s" data-turbo="false" title="Jump to 42:46 in this episode">42:46</a>.892)
<br>No, I.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=42m50s" data-turbo="false" title="Jump to 42:50 in this episode">42:50</a>.498)
<br>I would, yeah, actually do not like MacDonald's, but I think I would try it just for the experience, you know? But if I go to India, I gotta try curry, even though I'm not a huge fan of it, I at gotta try it. Yeah, at least gotta try it. So, but anyway, that's it.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=42m51s" data-turbo="false" title="Jump to 42:51 in this episode">42:51</a>.975)
<br>I to try it. Okay. Yeah.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=43m0s" data-turbo="false" title="Jump to 43:00 in this episode">43:00</a>.219)
<br>spicy</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=43m4s" data-turbo="false" title="Jump to 43:04 in this episode">43:04</a>.819)
<br>Right. Well, I mean, I'll, Laracon talk by Andy Hinkle might not be bad. Listen, if, if Laravel is not building this, this event tracker thing, a hundred percent, that's what your talk should be. You should, you should build it and make a talk about it.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=43m11s" data-turbo="false" title="Jump to 43:11 in this episode">43:11</a>.479)
<br>Yeah.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=43m17s" data-turbo="false" title="Jump to 43:17 in this episode">43:17</a>.64)
<br>They've gotta be. They've gotta be. I'm super excited about it. Yeah.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=43m22s" data-turbo="false" title="Jump to 43:22 in this episode">43:22</a>.973)
<br>Yes, they're not. I don't know what you guys are doing. I mean, I'm sure it's cool, but I don't I have no idea. You would have subverted all of my expectations possible.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=43m34s" data-turbo="false" title="Jump to 43:34 in this episode">43:34</a>.093)
<br>So yeah.</p>

<p>I'm trying to figure out to transition.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=43m42s" data-turbo="false" title="Jump to 43:42 in this episode">43:42</a>.08)
<br>Well, I mean, I mean, it's, crazy what Laravel's building with 50, $57 million, but like Tim MacDonald's doing for free for the PHP documentation. Like, have you been seeing, I've seen tweets, are they still called tweets? I've been seeing posts about, about modernizing the PHP documentation. And I've seen a lot of stuff from Tim MacDonald that he's sort of</p>

<p>doing in his free time. Have you been seeing this stuff?</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=44m12s" data-turbo="false" title="Jump to 44:12 in this episode">44:12</a>.023)
<br>Yeah, yeah, looks really good. I've seen his screenshot sees hat on Twitter. it was a while ago, wasn't it?</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=44m17s" data-turbo="false" title="Jump to 44:17 in this episode">44:17</a>.119)
<br>I trying to I think he said he was March, March of 2023. That's when he started, it looks like.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=44m26s" data-turbo="false" title="Jump to 44:26 in this episode">44:26</a>.339)
<br>Okay. Yeah, but I saw someone recently it was posting a like, just like we it's been what 10 years and it still looks the same, which I agree. Like anyone seeing the PHP documentation, it's just, kind of know as PHP developer, like you get pretty familiar with, with it. I don't know if that's how the, the, the developers are actually in the core PHP are like, they're just been so familiar with it. They know exactly where to go to find things and.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=44m32s" data-turbo="false" title="Jump to 44:32 in this episode">44:32</a>.979)
<br>Yeah.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=44m54s" data-turbo="false" title="Jump to 44:54 in this episode">44:54</a>.305)
<br>That his his screenshots will provide it in the show notes that he's been doing. It's like a It's like a breath of fresh air Of just seeing the it looks really good and so yeah, you can actually copy out snippets and it's just very clean and just very like the lair of elegant way and not saying that lair of all should have a great influence in the php to hucks, They just need some help. They just need some love. It's just like</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=45m4s" data-turbo="false" title="Jump to 45:04 in this episode">45:04</a>.475)
<br>It looks so nice. It looks incredible.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=45m25s" data-turbo="false" title="Jump to 45:25 in this episode">45:25</a>.424)
<br>They have a giant bar I'm looking at now. It's like change language. You know like another top corner I'm like, you know, where do you see that websites these days about just changing? I mean you might have like the the icon in the top right corner or something It's just and that's actually what he did. He put Ian and okay So and the top right corner, but it's just like it cleans up really nicely Looks really good. And I really hope this comes every I did a PR to layer volt or sorry I did a PR to the PHP docs</p>

<p>trying to clean up some of the getting started things. And they were like, it was using some HTML tags from the 2000s. I had to Google these PHP tags. Let me see.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=45m58s" data-turbo="false" title="Jump to 45:58 in this episode">45:58</a>.366)
<br>know that.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=46m7s" data-turbo="false" title="Jump to 46:07 in this episode">46:07</a>.263)
<br>No, Yeah, it needs a, I mean, there's nothing wrong with it, but yeah, a facelift could go a long, long way, especially with the complaints that quote unquote PHP is dying. Meanwhile, Laravel's getting, you know, $57 million in funding. So it's obviously not dying anytime soon, as long as Laravel's around.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=46m34s" data-turbo="false" title="Jump to 46:34 in this episode">46:34</a>.867)
<br>mean, these old docs, mean, they're not, they're not bad. mean, I don't typically when I go to the PHP docs, I don't scroll down past like the first example. Cause after that they just get, it gets chaotic and it gets kind of nasty. So I mean, if, they're going to go just even having that like little copy method in the top right corner, I would love that. But I mean, I know there's challenges that Tim's</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=46m34s" data-turbo="false" title="Jump to 46:34 in this episode">46:34</a>.945)
<br>Yeah, just, I'm gonna cut this part out, but I'm looking up.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=47m4s" data-turbo="false" title="Jump to 47:04 in this episode">47:04</a>.458)
<br>Tim MacDonald's facing with sort of getting it off the ground. Like he could do all this work and then the, you know, the contributors and maintainers of PHP could just be like, thanks. We, we don't want to do this or we don't want to then manage this technical debt of new docs have to go through like a new process or they write it in the old process and then have to. Face -lift it with, with, what's this even called? What did he call it? Fresco, al fresco, something like that.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=47m30s" data-turbo="false" title="Jump to 47:30 in this episode">47:30</a>.345)
<br>Mm -hmm. I love that name.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=47m33s" data-turbo="false" title="Jump to 47:33 in this episode">47:33</a>.395)
<br>So I mean, I think it's needed. I don't know how much merit it's gonna have coming to life. I want it to.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=47m42s" data-turbo="false" title="Jump to 47:42 in this episode">47:42</a>.891)
<br>Yeah. Yeah. And I think it'll be better for, for people to, make contributions to the actual documentation. I made a PR says years ago, somebody on Twitter was talking about how they were frustrated about how PHP is you have to write it in HTML. It's a, it's a web framework. It's not, it's not like for backend or it's not for,</p>

<p>for console applications and stuff like that. And we're like, well, you could just write a PHP file. And they're like, well, even the documentation says like you have to, you, put out like hello .php and then you write some HTML and then you write the, you know, the curly bracket, the echo. Yeah. like the inline PHP, you don't have to do that. And so, I made a PR and just saying, explain that in hello world that HTML tags are, you don't have to use them.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=48m25s" data-turbo="false" title="Jump to 48:25 in this episode">48:25</a>.905)
<br>Echo. Yeah.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=48m38s" data-turbo="false" title="Jump to 48:38 in this episode">48:38</a>.542)
<br>Cause their first example of like how to use PHP, the Hello World example is like an HTML, an HTML file and then inline PHP. It's like you can just do echo PHP. So I a PR to that, but I remember like having to go through like there's, I'm looking at this whole PR. It's like Sempera and like it's an HTML tag called Sempera and literal.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=48m50s" data-turbo="false" title="Jump to 48:50 in this episode">48:50</a>.856)
<br>Yeah, that's it.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=49m4s" data-turbo="false" title="Jump to 49:04 in this episode">49:04</a>.501)
<br>And so there's these things that, and these are components that they baked into their framework. And these like, you know, like a blade component or something, but they're like PHP components that they personally did. So you have to like understand the way that they wrote this documentation to even contribute to it. And it was kind of, kind of rough. And I feel like if it was just marked down, now people could just like, okay, I can fix this typo or, or not, there's a typo, but they actually make a useful contribution.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=49m27s" data-turbo="false" title="Jump to 49:27 in this episode">49:27</a>.602)
<br>Easy peasy.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=49m34s" data-turbo="false" title="Jump to 49:34 in this episode">49:34</a>.114)
<br>So.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=49m36s" data-turbo="false" title="Jump to 49:36 in this episode">49:36</a>.584)
<br>I mean, yeah, it's going to have to be a big undertaking and it's going to have to come from the, the PHP maintainers. Like I like what Tim MacDonald's doing. It looks great. It looks modern, man. If, if, if, if the PHP, owners and contributors can, can get behind it, I'd be all for it. I'd try to help. I mean, I don't, I don't know how much I can help Tim MacDonald looks like he's killing it way better than I could have.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=50m3s" data-turbo="false" title="Jump to 50:03 in this episode">50:03</a>.404)
<br>Yeah.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=50m4s" data-turbo="false" title="Jump to 50:04 in this episode">50:04</a>.473)
<br>anything but I don't know I like it a lot</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=50m10s" data-turbo="false" title="Jump to 50:10 in this episode">50:10</a>.593)
<br>Yeah, it looks really good. yeah, Tim MacDonald always puts out some amazing work. Like anything of that he's doing, I watch really closely or anything he puts out on just, yeah, it's always really high quality work. So it's good stuff.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=50m11s" data-turbo="false" title="Jump to 50:11 in this episode">50:11</a>.709)
<br>I like what he's doing a lot.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=50m24s" data-turbo="false" title="Jump to 50:24 in this episode">50:24</a>.713)
<br>Plus he's got a dope beard. Shout out to MacDonald's beard.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=50m27s" data-turbo="false" title="Jump to 50:27 in this episode">50:27</a>.491)
<br>You</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=50m31s" data-turbo="false" title="Jump to 50:31 in this episode">50:31</a>.687)
<br>I mean, come on. For real,</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=50m34s" data-turbo="false" title="Jump to 50:34 in this episode">50:34</a>.593)
<br>Wish I could grow one. It just goes straight down.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=50m39s" data-turbo="false" title="Jump to 50:39 in this episode">50:39</a>.415)
<br>You should get one eventually, get you a soul patch. Have a soul bet. Well yeah, you gotta get CFO approval. You need to submit an expense report on how much this is gonna take to maintain a beard. You gotta get beard balm, you gotta get all the stuff, you get your own special, what is it, a beard brush or whatever. Or you just be like me and nobody really knows what to get me for Christmas so I collect like beard.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=50m42s" data-turbo="false" title="Jump to 50:42 in this episode">50:42</a>.283)
<br>Hmm. my wife would hate that. No.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=51m7s" data-turbo="false" title="Jump to 51:07 in this episode">51:07</a>.811)
<br>kits. So I probably have like a year's worth of supply of beard balm. If you need some, I'll ship you some for free. Merry Christmas. Happy birthday.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=51m13s" data-turbo="false" title="Jump to 51:13 in this episode">51:13</a>.299)
<br>that's nice. Yeah. Well, this weekend, know, when I had COVID, I was staying away from everybody and I was down the hallway and my wife was like, when you're like feeling better, the first thing you do is you need to shave. So it was just, I haven't shaved in like, it was like three days at that point I had shaved. And so she's like, you need to shave. She's wonderful, don't get me wrong, but she does not like me with a beard. She's like, it's like, just doesn't look good. It grows in weird patchy places.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=51m28s" data-turbo="false" title="Jump to 51:28 in this episode">51:28</a>.863)
<br>Ha ha ha ha!</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=51m35s" data-turbo="false" title="Jump to 51:35 in this episode">51:35</a>.538)
<br>way.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=51m43s" data-turbo="false" title="Jump to 51:43 in this episode">51:43</a>.937)
<br>I was going to ask you how often do you shave? Do you shave every day? Every other day?</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=51m48s" data-turbo="false" title="Jump to 51:48 in this episode">51:48</a>.439)
<br>Well, two to three days, yeah. About every other day, yeah. Yeah. Yeah, yeah, it comes in pretty quick. Is that pretty often? I didn't know that. Well, I'll meet you with a beard.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=51m51s" data-turbo="false" title="Jump to 51:51 in this episode">51:51</a>.263)
<br>No kidding. I did not know that about you. That's insane. That's insane. I don't shave at all, so I'm like, don't, I didn't know how often you shaved. Interesting. See, we've been friends for like eight years and I still didn't know that about you. You shave every other day. Just don't one day. Like if your wife goes on a vacation by herself for a week, do not shave that week.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=52m13s" data-turbo="false" title="Jump to 52:13 in this episode">52:13</a>.367)
<br>Never know.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=52m19s" data-turbo="false" title="Jump to 52:19 in this episode">52:19</a>.027)
<br>I see a week's worth of growth. And then shave it right before she gets home. you can't. Yeah, yeah. Yeah, yeah. Come on, let's just see. You know what I mean?</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=52m20s" data-turbo="false" title="Jump to 52:20 in this episode">52:20</a>.939)
<br>Ugh.</p>

<p>I don't know if I could even do it right before she's walking in. And then there's like, yeah.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=52m32s" data-turbo="false" title="Jump to 52:32 in this episode">52:32</a>.641)
<br>Yeah, we'll give it a shot. We'll see. We'll see how terrible I look.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=52m34s" data-turbo="false" title="Jump to 52:34 in this episode">52:34</a>.218)
<br>Alright, I think you should. But I mean...</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=52m40s" data-turbo="false" title="Jump to 52:40 in this episode">52:40</a>.979)
<br>I don't remember what I was gonna say. this part out any, because I don't... I don't know how to transition here. Yeah. Yeah, yeah.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=52m47s" data-turbo="false" title="Jump to 52:47 in this episode">52:47</a>.844)
<br>So what you've been mentioning over the weeks, you've been working on a Project X. Do you have an update for us?</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=52m56s" data-turbo="false" title="Jump to 52:56 in this episode">52:56</a>.783)
<br>I'm hesitant to say the name, but I mean, I've already, I've, I've already, I've already bought the domain name. So, I mean, you can't, if I say the name, you can't go out and buy it before I can buy it because I've already bought it. but yeah, I've, that's, this is why I sympathize with Caleb Borzio because he has a package that are sort of like component based things and charging per project. And that's sort of what I've been building on in the background. My project X is called, it's called,</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=52m57s" data-turbo="false" title="Jump to 52:57 in this episode">52:57</a>.187)
<br>Okay. There was a sigh when you started there.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=53m26s" data-turbo="false" title="Jump to 53:26 in this episode">53:26</a>.319)
<br>auto load and I want to give too much away but it does involve the tall stack obviously it is very filament heavy it relies on filament quite a lot and it should be launching in a couple weeks I don't know if I want to say anything else about it I did show you the home page and some of the docs before we recorded this so it's</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=53m45s" data-turbo="false" title="Jump to 53:45 in this episode">53:45</a>.073)
<br>well.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=53m55s" data-turbo="false" title="Jump to 53:55 in this episode">53:55</a>.579)
<br>Almost done. It's it's something I've been working on for quite a while. It's got quite a lot of components and pieces and sort of niceties nice to haves Hopefully in in in the hopes of speeding up development, especially for like CMS type projects in filament Because that's seems to be what I do the most So, yeah, I think I think that's I think that's all I want to say until it's until it's out</p>

<p>It's called auto load. It's going to be using filament. It's a CMS based component thing. It is a composer package. So it's not going to be like a GitHub repository you get access to. And you know, you have to mirror and pull changes down merge conflicts. hate all that. It's a composer package. It's going to do a lot of stuff for you. I think it's going to speed up your development 10 fold. Like it's already done for mine. And the fun fact is that the documentation site that I built for it is built.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=54m27s" data-turbo="false" title="Jump to 54:27 in this episode">54:27</a>.747)
<br>Nice.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=54m55s" data-turbo="false" title="Jump to 54:55 in this episode">54:55</a>.279)
<br>in autoload. So like I can manage the site itself that's marketing the product with the product.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=54m57s" data-turbo="false" title="Jump to 54:57 in this episode">54:57</a>.316)
<br>nice.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=55m3s" data-turbo="false" title="Jump to 55:03 in this episode">55:03</a>.613)
<br>which I think I like.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=55m3s" data-turbo="false" title="Jump to 55:03 in this episode">55:03</a>.865)
<br>Those are the best products, like how with Laravel Vapor runs on Laravel Vapor, you know? And so I love that, the idea of doing that.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=55m11s" data-turbo="false" title="Jump to 55:11 in this episode">55:11</a>.059)
<br>Yeah, listen, I'm gonna put my money where my mouth is. I'm gonna build the site that I market it with, with the product that I'm marketing the site with. Just to prove the fact. So yeah, hopefully before the end of September, it should be public and really somewhere.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=55m18s" data-turbo="false" title="Jump to 55:18 in this episode">55:18</a>.259)
<br>Mmm. I like it.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=55m30s" data-turbo="false" title="Jump to 55:30 in this episode">55:30</a>.849)
<br>Are you, are you considering posting in the filament marketplace store?</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=55m35s" data-turbo="false" title="Jump to 55:35 in this episode">55:35</a>.007)
<br>It's not necessarily a plug -in for Filament, but I do have plans to sponsor Filament for a couple months on their... I forget what tier it is. It's like the silver or the bronze tier. I do plan on at least trying to sponsor Filament since the package relies so much on Filament itself. It seems only fair to give some old kickback to Dan.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=55m40s" data-turbo="false" title="Jump to 55:40 in this episode">55:40</a>.33)
<br>OK.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=56m1s" data-turbo="false" title="Jump to 56:01 in this episode">56:01</a>.079)
<br>Yeah. Yeah. filament. Yeah. Okay. Yeah. we've talked about how great filament is and, I think we have at least on show, but we absolutely huge fans of filament. Just being able to be do front end and back end and operations and, kind of used it pretty heavily. And so I'm really excited about this. I'm really excited to see what it is and hear more. So yeah.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=56m2s" data-turbo="false" title="Jump to 56:02 in this episode">56:02</a>.601)
<br>But I don't, I don't know.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=56m13s" data-turbo="false" title="Jump to 56:13 in this episode">56:13</a>.47)
<br>Yes.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=56m27s" data-turbo="false" title="Jump to 56:27 in this episode">56:27</a>.424)
<br>TBD TBD that's project X now I do have a I do have Hopefully two weeks soon before September's is is my my goal before the end of September and then</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=56m30s" data-turbo="false" title="Jump to 56:30 in this episode">56:30</a>.263)
<br>to talk in two weeks?</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=56m35s" data-turbo="false" title="Jump to 56:35 in this episode">56:35</a>.555)
<br>Well, yeah. Okay. Nice. Very nice.</p>

<p>Do you have any technical bits you want to talk about like with payments? I know that was like a, that's always an interesting concept about how to handle payments properly or subscriptions versus one time. So how are you handling it? Is it like a one time thing you're in or is it like a, you get updates for a year?</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=57m3s" data-turbo="false" title="Jump to 57:03 in this episode">57:03</a>.327)
<br>I'm still undecided, but as of now it is pay once, you get it forever. I don't, I I can think it would be a SaaS. just, think it would just make people more mad that it's a subscription than if I just charged a higher price upfront, you get it for lifetime than trying to nickel and dime you for X amount a year for a couple of years to make my money back or whatever.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=57m14s" data-turbo="false" title="Jump to 57:14 in this episode">57:14</a>.306)
<br>once .com</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=57m32s" data-turbo="false" title="Jump to 57:32 in this episode">57:32</a>.913)
<br>Right now it's lifetime. It is more than flux, I'll tell you that. It's gonna charge more than flux. It's a lot more than a component library. It's going to handle a lot of things for you and I've sort of compiled a couple of the key things that I think a lot of CMS driven sites using filament larvae will need like.</p>

<p>It's gonna have a media library. It's gonna use Spotty's media library, right? So you're get all of those niceties. It's gonna use, I think the guy's name's Silver, Jason Silver, something like that, PageCache. So your pages are gonna be cached. You can use NGINX to get them right there and it's gonna make your site load as fast as possible. Just some of those niceties. Spotty image optimization, Spotty, Spotsty.</p>

<p>I can't pronounce it right, that's my Midwest accent. To like auto -optimize your images into WebP so like they're in the next gen format, you can upload a JPEG and the media library's gonna put it into WebP, auto -optimize it for you when it's displayed on the page to get your load times as fast as possible. Trying to be as accessible as possible, you manage all your alt tags in the media library, that way you just include them on the page and boom, the alt text automatically show up.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=58m26s" data-turbo="false" title="Jump to 58:26 in this episode">58:26</a>.057)
<br>Yeah. Yeah. I gotcha.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=58m52s" data-turbo="false" title="Jump to 58:52 in this episode">58:52</a>.243)
<br>That type of thing. I want to get niceties. I want you to be able to build the CMS and filament and Laravel as fast as possible. And that's sort of what AutoLoad is going to do. It's going to auto load all of these things for you and you don't have to think about them. Hence the name, AutoLoad.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=59m3s" data-turbo="false" title="Jump to 59:03 in this episode">59:03</a>.747)
<br>Mm</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=59m7s" data-turbo="false" title="Jump to 59:07 in this episode">59:07</a>.511)
<br>Yeah. Not to be too confused with the PHP auto loader. So auto load. Yeah. Okay. Yeah. I like it. Some inspiration there. Yeah. That's cool, man.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=59m12s" data-turbo="false" title="Jump to 59:12 in this episode">59:12</a>.315)
<br>Yeah, but that's kind of what I named it after. It's going to be something of that nature. Yeah. Yeah. So I'm, I'm excited for it. Been working on it a long, long time. It's taken quite a lot of development to just, just to get it ready for launch. Like I had to build other packages to sort of help with my launch. Like I use, I use repman .io. I don't know if you've heard that it's where you can host like private composer packages.</p>

<p>And then you could generate a sort of access tokens, you know, license keys so people can download your composer package instead of using packages. It's free. I highly recommend that. But you know, the marketing sites built with cashier and paddle. And, so I've got a basically hook into all that. You complete a transaction. I've got to now call rep man to get you a new access token, send you an email so you can download all that stuff.</p>

<p>That package didn't exist, so I had to make that in order to get ready to launch this thing. The problem was I already did a bunch of testing with trying to purchase stuff, so I had to make another package to then go back through and basically replay cashier events so I can test to make sure that it creates the access token and sends you an email. It was quite a journey just to get to where it is now. I could see the finish line. It's so close.</p>

<p>I could see it. I almost tasted it, but I could see it.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h0m41s" data-turbo="false" title="Jump to 01:00:41 in this episode">01:00:41</a>.795)
<br>Wow. Yeah.</p>

<p>So you mentioned replay events and stuff like that. Is there any, is there any like, verbs or any type of things like that of event sourcing happening? Or is it just all, since it's CMS driven, is it? I don't know. Cause you talked about, you talked about like having a history state sometimes or trying to do that. yeah.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h1m0s" data-turbo="false" title="Jump to 01:01:00 in this episode">01:01:00</a>.055)
<br>Yeah</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h1m7s" data-turbo="false" title="Jump to 01:01:07 in this episode">01:01:07</a>.591)
<br>It's a, so it is going to come with what I call revisions. So whenever you make a page update in the CMA in the filament, CMS will keep a reversion history or a version history of everything previous to that. So you can always roll back. So, I didn't mean to change the header on, you know, Tuesday. I'll roll it back to what it was on Monday. We'll have stuff like that. but as far as like replaying events, it, the CMS itself won't, but I did have to build a separate little package.</p>

<p>I made it open source. It's for cashier to replay events for cashier. Cause I hated how I hate, I hate setting up ngrok for local cashier like webhook stuff. It's annoying to me. I just want to use my, my, you know, herd TLD, do all of my stuff there and just have it work without setting up an ngrok. And then I've got to set up webhooks for that ngrok tunnel. And it's just a nightmare. So that's, that's, that's not part of the CMS, but I did make a package.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h1m42s" data-turbo="false" title="Jump to 01:01:42 in this episode">01:01:42</a>.029)
<br>nice.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h1m47s" data-turbo="false" title="Jump to 01:01:47 in this episode">01:01:47</a>.382)
<br>that's worst,</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h2m5s" data-turbo="false" title="Jump to 01:02:05 in this episode">01:02:05</a>.961)
<br>for replaying cashier paddle events so that I could test this package. And that's why I haven't seen anything else like this in the community on filament yet. So I'm hoping that it's unique, but I'm too far in to not launch it. So I'm at least gonna launch it. If it sucks, please don't let me know. If it's awesome, then let me know. You can send me a message.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h2m34s" data-turbo="false" title="Jump to 01:02:34 in this episode">01:02:34</a>.829)
<br>talked about repo man, one that I've heard in people I've been using for a while is AnyStack. It's AnyStack .sh if you looked into them. But that's what Caleb, he uses for Flux. And so if you have any troubles with repo man, you might give that a shot. So yeah, man, it sounds really exciting.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h2m41s" data-turbo="false" title="Jump to 01:02:41 in this episode">01:02:41</a>.907)
<br>Mm -hmm. Yeah.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h2m56s" data-turbo="false" title="Jump to 01:02:56 in this episode">01:02:56</a>.862)
<br>Yeah, I looked into any stack first. and here's where my cheap state comes in is that it costs money for any stack and you have to sell exclusively on any stack, for the, for the lowest tier. So like I couldn't host the package myself. I had to, so if you wanted to check out, you'd have to check out on any stack. Like I just redirect you there and I felt it was important for more branding purposes to keep you on the site. Just use the paddle overlay function.</p>

<p>Check out on the site, be done.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h3m26s" data-turbo="false" title="Jump to 01:03:26 in this episode">01:03:26</a>.211)
<br>That was on their lowest plan</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h3m30s" data-turbo="false" title="Jump to 01:03:30 in this episode">01:03:30</a>.431)
<br>Yeah, something like that where you could, you could only sell in their marketplace and they take like 15, 20 % of your, of your, you know, your fee. But if I could just put it in paddle and use rep man, I could keep a lot more of the revenue. And I just have to spend a little bit of time making a package that creates access keys on every paddle purchase. And I thought that was more worth it than trying to pay any stack, you know, X amount of money.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h3m39s" data-turbo="false" title="Jump to 01:03:39 in this episode">01:03:39</a>.959)
<br>Mm -hmm.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h3m54s" data-turbo="false" title="Jump to 01:03:54 in this episode">01:03:54</a>.258)
<br>Okay, yeah, it was a lot pucks.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h3m59s" data-turbo="false" title="Jump to 01:03:59 in this episode">01:03:59</a>.539)
<br>Nothing wrong with AnyStack I think it's great, but for a solo indie developer like myself, it's not another thing I wanted to pay for, to get my idea out fast.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h4m11s" data-turbo="false" title="Jump to 01:04:11 in this episode">01:04:11</a>.811)
<br>Well, yeah, at least starting out right. Because for I feel like, you know, it might be maybe a transition in the future, but at least for, you know, starting out when you're at the bottom line of zero, zero dollars, you know, and I'm looking at they're starting, it's like $40 a month, which isn't crazy. But when you have hosting and everything piled on top of it, it really adds up. And so was like, once you get your once you get things going, then it's like, maybe this is</p>

<p>something I should pursue more.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h4m43s" data-turbo="false" title="Jump to 01:04:43 in this episode">01:04:43</a>.199)
<br>Yeah, I definitely looked into it. The other big thing that I didn't like about any stack was the number of licenses. Like I can't, I don't predict that I'm going to have like hundreds of licenses immediately, but like if that's the restriction of me paying, you know, $40 a month versus like a hundred dollars a month is so I can have more licenses. It's got to be big for me to pay for that. And it's, I'm in the negatives right now. Like I've spent money on it I haven't made anything.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h5m10s" data-turbo="false" title="Jump to 01:05:10 in this episode">01:05:10</a>.275)
<br>Yeah. Yeah.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h5m13s" data-turbo="false" title="Jump to 01:05:13 in this episode">01:05:13</a>.469)
<br>So yeah, in the true MVP fashion, I'm trying to get it out there fast and cheap. See if people like it.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h5m21s" data-turbo="false" title="Jump to 01:05:21 in this episode">01:05:21</a>.197)
<br>Sounds good, dude. I'm excited to hear more. yeah, we'll definitely talk about it more in detail when you get close to pressing the big launch button.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h5m31s" data-turbo="false" title="Jump to 01:05:31 in this episode">01:05:31</a>.634)
<br>Yeah, TBD, TBD. It gives me a little heart palpitations thinking about pressing the launch button, but it's coming. It's soon. It's soon. Big stuff coming.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h5m34s" data-turbo="false" title="Jump to 01:05:34 in this episode">01:05:34</a>.391)
<br>like it.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h5m38s" data-turbo="false" title="Jump to 01:05:38 in this episode">01:05:38</a>.049)
<br>Yeah, it's always a little terrifying. Yeah.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h5m44s" data-turbo="false" title="Jump to 01:05:44 in this episode">01:05:44</a>.196)
<br>Cool dude, excited to hear more. right. So last thing I want to talk about, which it isn't, we didn't put it up, but we actually have it on for next week. I did give it a try. The Artisan Brew, it's fantastic. It's so good. I tried it at Laracon. So at Laracon they had a coffee bar. At first it was, you know, they have it, they have two different coffee bars in the venue and they have</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h5m46s" data-turbo="false" title="Jump to 01:05:46 in this episode">01:05:46</a>.761)
<br>Yeah, yeah, yeah.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h5m58s" data-turbo="false" title="Jump to 01:05:58 in this episode">01:05:58</a>.632)
<br>yeah.</p>

<p>Okay.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h6m13s" data-turbo="false" title="Jump to 01:06:13 in this episode">01:06:13</a>.683)
<br>one, but then people got too loud in the venue. They're trying to, they're trying to tell people to cool down. But a lot of people just kind of talking around the coffee bar or vendors and stuff. So the trick is go to the back to totally any line, you know? So my coffee of choice, we talked about this a little bit, but my, if I, if you have an open coffee bar, I love an ice vanilla latte. It's just my thing for what I really like. So I got that in the artisan brew. had four of them in one day. It was free.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h6m26s" data-turbo="false" title="Jump to 01:06:26 in this episode">01:06:26</a>.131)
<br>Mm -mm.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h6m40s" data-turbo="false" title="Jump to 01:06:40 in this episode">01:06:40</a>.668)
<br>no. no.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h6m42s" data-turbo="false" title="Jump to 01:06:42 in this episode">01:06:42</a>.209)
<br>It was free, it was all provided at the conference. It was free, it was so good. I wasn't jumping out, know, or bouncing off the walls or anything, but it was incredibly good. And so, yeah, my brew hasn't made it in yet. I need to check up on that, but I'm so stoked when it actually does. I came back home and I tried my brews that I already have here that are not the Artisan blend and I was deeply disappointed. like, I miss it, can't wait for it to come in. So it is very good.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h7m0s" data-turbo="false" title="Jump to 01:07:00 in this episode">01:07:00</a>.809)
<br>okay.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h7m12s" data-turbo="false" title="Jump to 01:07:12 in this episode">01:07:12</a>.127)
<br>Okay, so I mean, it's okay.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h7m12s" data-turbo="false" title="Jump to 01:07:12 in this episode">01:07:12</a>.471)
<br>So yeah, Artisan Brew by The Terminal SH. Give it a try.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h7m16s" data-turbo="false" title="Jump to 01:07:16 in this episode">01:07:16</a>.795)
<br>Is it exclusive or are they gonna like continuously do this thing? If it's exclusive, you need to buy you a bunch of packs right now. Like to hell with the podcasts, buy more.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h7m26s" data-turbo="false" title="Jump to 01:07:26 in this episode">01:07:26</a>.519)
<br>think, yeah.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h7m30s" data-turbo="false" title="Jump to 01:07:30 in this episode">01:07:30</a>.657)
<br>I think it's going, yeah, that's always the worry, right? I, I, I battled this with like creamers and stuff a lot. They'll have like a creamer that you really like, maybe like a seasonal thing and then, or not even a seasonal thing. It'll just be going for years and all of a it's gone. You're like, well, and then they're like, well, that was a marketing campaign we've had for two years or whatever. So, but it's, but for, that's what I kind of worry about with like a brew I like. And so I try to, I try to stick with the flagship brew when I choose a, like a brewing company.</p>

<p>So that way I pretty much don't unless they go out of business, they're pretty much not going to get rid of that unless they change it or something. But Artisan Brew I think is, it seems to be selling really well. There's a lot of, I see a lot of things on Twitter about it. So hopefully, hopefully it'll stay around, but I'm a customer. So, and I plan to be one for a little while. yeah, be good.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h8m18s" data-turbo="false" title="Jump to 01:08:18 in this episode">01:08:18</a>.825)
<br>Hey</p>

<p>Okay, so I mean, pass us the test. It's not a quote unquote cash grab. It's actually legit delicious.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h8m27s" data-turbo="false" title="Jump to 01:08:27 in this episode">01:08:27</a>.491)
<br>That's good, yeah, yeah, for sure. Terminal team, support, put some money in Prime Engine's pocket and the rest of the terminal team, so yeah, that's good. They're a bunch of good guys.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h8m30s" data-turbo="false" title="Jump to 01:08:30 in this episode">01:08:30</a>.865)
<br>Alright, good for them.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h8m36s" data-turbo="false" title="Jump to 01:08:36 in this episode">01:08:36</a>.985)
<br>Hey, Ching Ching, you heard it here. Hey, if you wanna sponsor this episode, or the next episode of The Artisan, the, if you wanna sponsor the next episode of The Midwest Artisan, DM Andy, don't DM me, because I probably will not answer. Or you should DM Andy.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h8m58s" data-turbo="false" title="Jump to 01:08:58 in this episode">01:08:58</a>.531)
<br>We'll take pennies on the dollar. I mean, honestly, if you just, yeah, wanna talk about something, yeah, feel free.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h9m6s" data-turbo="false" title="Jump to 01:09:06 in this episode">01:09:06</a>.175)
<br>Ching -ching.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h9m7s" data-turbo="false" title="Jump to 01:09:07 in this episode">01:09:07</a>.649)
<br>All right, well, I think it's been a good show. So anything else on your side?</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h9m13s" data-turbo="false" title="Jump to 01:09:13 in this episode">01:09:13</a>.951)
<br>think that's it, man. I'm excited for what we're building next. I'm excited for what Laravel's building next. I wanna build something.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h9m16s" data-turbo="false" title="Jump to 01:09:16 in this episode">01:09:16</a>.895)
<br>Not as a -</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h9m20s" data-turbo="false" title="Jump to 01:09:20 in this episode">01:09:20</a>.675)
<br>Yeah, not as exciting as last week I feel like. There's a lot of great topics we had, but it was a few stories to tell. This one's a little bit more just about what's been going on. We've both been kind of out of commission, so it's been good just to kind of do a final round of Laracon and just talk about the future. So it's been good.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h9m26s" data-turbo="false" title="Jump to 01:09:26 in this episode">01:09:26</a>.601)
<br>Game in hot.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h9m44s" data-turbo="false" title="Jump to 01:09:44 in this episode">01:09:44</a>.681)
<br>Yeah, man.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h9m46s" data-turbo="false" title="Jump to 01:09:46 in this episode">01:09:46</a>.219)
<br>Alright, you've been listening to another episode of The Midwest Artisan. You can reach out to me at Andy Hnk or Andy Hinkle on Twitter. Dalton, how can we reach out to you?</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h9m56s" data-turbo="false" title="Jump to 01:09:56 in this episode">01:09:56</a>.081)
<br>You can find me at daltonmccleary .com or on x slash twitter at Dalton McCleary. Easy peasy.</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h10m4s" data-turbo="false" title="Jump to 01:10:04 in this episode">01:10:04</a>.213)
<br>Awesome. And if you want, if you listen to show thing, have any questions, feel free to reach out to us and yeah, I'm not sure. lost my train of thought.</p>

<p>Dalton McCleery (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h10m18s" data-turbo="false" title="Jump to 01:10:18 in this episode">01:10:18</a>.368)
<br>yeah all right bye</p>

<p>Andy Hinkle (<a href="https://the-midwest-artisan.transistor.fm/episodes/57-million-reasons-to-love-laravel/transcript#t=1h10m23s" data-turbo="false" title="Jump to 01:10:23 in this episode">01:10:23</a>.52)
<br>Alright.</p>
        
      </div>
        </div>
</x-app>
 