<x-app>
    <x-slot name="seo">
        <title>We Got New Jobs (While Everything's on Fire)</title>
        <meta name="description"
            content="We (both) got new jobs. Our journey and the process of finding new jobs, the interview process, and how we're feeling about it all.">
        <meta property="og:title" content="Using Filament on the frontend, mockery, and documentation patterns">
        <meta property="og:description"
            content="We (both) got new jobs. Our journey and the process of finding new jobs, the interview process, and how we're feeling about it all.">

        <script type="application/ld+json">
            {
            "@context": "https://schema.org/",
            "@type": "PodcastEpisode",
            "url": "https://the-midwest-artisan.transistor.fm/episodes/we-got-new-jobs-while-everythings-on-fire",
            "name": "We Got New Jobs (While Everything's on Fire)",
            "datePublished": "2025-02-17",
            "timeRequired": "PT53M33S",
            episodeNumber: "13",
            "description": "We (both) got new jobs. Our journey and the process of finding new jobs, the interview process, and how we're feeling about it all.",
            "associatedMedia": {
                "@type": "MediaObject",
                "embedUrl": "https://www.youtube.com/watch?v=6D94C18KX9M"
            },
            "publisher": {
                "@type": "Organization",
                "name": "The Midwest Artisan",
                "url": "https://the-midwest-artisan.transistor.fm"
            }
        </script>
    </x-slot>

    <p class="py-2 text-center font-sans text-sm text-white/75">February 17, 2025</p>
    <h1 class="text-center font-sans text-3xl font-bold text-white md:text-5xl">We Got New Jobs (While Everything's on
        Fire)</h1>

    <div class="mx-auto mt-8 max-w-3xl">
        <div class="px-4 pb-10">
            <iframe width="100%" height="180" frameborder="no" scrolling="no" seamless=""
                src="https://share.transistor.fm/e/4407ce26?color=1F2937&background=101827"></iframe>
        </div>

        <div class="prose prose-lg px-4 dark:prose-invert">
            <div>In this episode, Andy and Dalton discuss their recent job transitions, the challenges of navigating the
                job market, and the why the interview process is broken. We also briefly touch on Laravel Cloud and
                Laracon US.
            </div>
        </div>

        <div class="mt-8 px-4">
            <iframe class="h-96 w-full" src="https://www.youtube.com/embed/6D94C18KX9M?si=NXchsI80UDk5CcsS"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <h2 class="mt-12 text-center text-2xl font-bold text-white">Transcript</h2>

        <div class="prose prose-sm px-4 dark:prose-invert">
            <section class="episode-description episode-transcript" x-show="transcript">
                <p>Andy Hinkle (00:01.31)
                    <br>Hey everybody, welcome to another episode of The Midwest Artisan. I'm your host Andy Hinkle.
                </p>

                <p>Dalton McCleery (00:06.486)
                    <br>And I'm your co-host Dalton McCleary.
                </p>

                <p>Andy Hinkle (00:09.258)
                    <br>Dalton how you doing, man? It's been a while.
                </p>

                <p>Dalton McCleery (00:11.278)
                    <br>It's been a long time. I'm doing great, by the way. Thank you for asking. How about yourself?
                </p>

                <p>Andy Hinkle (00:15.904)
                    <br>Yeah, yeah, doing really good. Yeah, so, yeah, for the show, I'd love to talk about like how we
                    both got new jobs. We can actually talk about it now. Yeah, Laracon US and hopefully by the end of
                    it, we can touch on Laravel cloud. We'll see if we hopefully we should have time. We should. And so
                    maybe we can talk about some Laracon and use stuff too. But yeah, man. So yeah, we both got new
                    jobs.
                </p>

                <p>Dalton McCleery (00:24.664)
                    <br>Cha-ching!
                </p>

                <p>Andy Hinkle (00:45.376)
                    <br>we are at separate companies. yeah, I now work for a company it's called Wilber Group, which is
                    like insurance subrogation. I work with the wonderful Jake Bennett. And so he's a long time
                    community member in Laravel And man, it's been such like so much fun working in these projects
                    themselves and along with like the team, the code is just like.
                </p>

                <p>Really great, just the collaboration, the pairing, we do a lot of pairing. Just a lot of stuff, I
                    firmly have just been believing in long time. Just a really good fit for me. Love the culture there.
                    It's been really good. so, yeah, and you wanna give a little thing about where you're at, what
                    you're up to these days now?</p>

                <p>Dalton McCleery (01:28.972)
                    <br>Yeah, it's kind of, it is kind of bittersweet that we work at two different companies now,
                    because we, we work together for like seven or eight years at the same company. It's been a long
                    time. Yes.
                </p>

                <p>Andy Hinkle (01:33.802)
                    <br>Weird.
                </p>

                <p>I was gonna say that it's been, yeah, two different companies. Yeah, we've been at the two different
                    companies for seven, seven, eight years now. And we followed each other. Yeah, and now it's like,
                    we're two different places. It's been good.</p>

                <p>Dalton McCleery (01:44.919)
                    <br>So it's very odd.
                </p>

                <p>Dalton McCleery (01:50.99)
                    <br>Yeah, it's it's it's weird but yeah, so I work I work for a company called insight LPR they do a
                    lot of like real-time alerts and like searching for License plate scanning and whatnot of that
                    nature. I work I don't think there's any like big prominent Laravel members in my company other than
                    Nobody
                </p>

                <p>Andy Hinkle (02:14.752)
                    <br>It doesn't matter that you have, you know, Laravel people, but yeah, just so about that culture.
                    Yeah, for sure.
                </p>

                <p>Dalton McCleery (02:20.086)
                    <br>And the culture is what's great about this. do a lot of pair programming, a lot of, do daily
                    standups. Like it's, it's great. The, my boss will, will go through tickets and he'll essentially
                    groom them to be ready for developers to work on. So it's not like you're just sitting here
                    twiddling your thumbs going, I don't know what to do. Or you'll get a task that's come in. That's
                    not in, that's incomplete. And you have to send it back saying, I need more details. My boss just
                    like he does that for us.
                </p>

                <p>You don't even have to like worry about it. When a ticket comes in, you know that it's already been
                    vetted by the boss and it's ready to work on. just like that, that workflow, the pair programming
                    daily standups is just like a godsend. It is so good. I cannot, I cannot compliment it enough.</p>

                <p>Andy Hinkle (03:01.312)
                    <br>Yes. Yeah.
                </p>

                <p>Yeah, it is so nice having like a good system like that. And the timing on our switch was purely like
                    coincidental. Sorry, the timing on that was like purely coincidental on how we both left at the same
                    time. We both felt really bad for leaving at the same time. I left shortly after you did. In fact,
                    like your departure slightly delayed my departure and like, no, no, nothing towards you or anything
                    like that. But it was just like, I really didn't wanna screw that, you know.</p>

                <p>company that we were at. They're a fantastic company. They're just like the work kind of dried up of,
                    you know, we, started for me, it started last summer. It's when I decided to keep my eyes open for a
                    new opportunity. Work dried up. And during how work was really slow, it gave me an opportunity to
                    step back, just assess where I want to be at with my career. And</p>

                <p>Dalton McCleery (03:51.662)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (04:03.228)
                    <br>Agency work, can be very unpredictable. know, working agency space, work on a lot of context
                    switching, site switching, and you deal with that from any company that you go to, even non-agency
                    work. But at the same time, it's like, what I mean by that is like work can be really slow and or it
                    can pick up really fast and we have to get things out the door for clients in a very quick rate. Or
                    at same time, it's just like you want to be billable. That's your thing. You want to, you want to.
                </p>

                <p>Dalton McCleery (04:31.342)
                    <br>Mm-hmm. Mm-hmm.
                </p>

                <p>Andy Hinkle (04:31.988)
                    <br>be able to provide money or something for the business. Yeah, value for the business. Yeah,
                    exactly. And I felt like that was morally draining for me is like, I kept asking our management,
                    like, please, I want work, please bring it in, I'm ready and I'm hungry for that. But it's been
                    really slow and nothing to them. It's just been agencies across the board. I've been hearing just in
                    hiring freezes or they just aren't getting a lot of work in.
                </p>

                <p>Dalton McCleery (04:35.192)
                    <br>value to anything.
                </p>

                <p>Andy Hinkle (05:02.42)
                    <br>But you know, when you come to work, since last summer, I've just been in the slump of like,
                    when you come to work and you have a fire under you, you're ready to tackle difficult problems. I
                    went to Laracon and I went to Laracon and then I came back with all this energy. I have a fire under
                    me ready to work and just throughout all that summer, really, just like, I'm ready to tackle these
                    difficult problems and innovate and you're hungry to push these boundaries and stuff like that,
                    explore new things.
                </p>

                <p>And you want to try really hard, know, like Aaron Francis, you want to try really hard and you know,
                    and contribute meaningfully. so, but day after day, if the work coming in, when it's like nothing at
                    all, or it's lacking a challenge, just, it came to a point where all of my learning was at a
                    personal level. It was something I was doing on side projects or just something I was like, I had a
                    lot of professional development time. So I'm like, let's, let's pick up.</p>

                <p>Reverb and see what that's like with live wire and just see how those bounce with each other just
                    stuff like that all of my time was spent doing that and It was just nothing for my day-to-day like
                    when I'm actually working, you know, like I feel like I should at least learn something or Something
                    like that at my workplace and so That's kind of my pitch like it's just been the I would be
                    completely honest the last six months have been some of the hardest months of just times of my life,
                    it's just</p>

                <p>It's been really hard just because you've been really like, you really want to push forward. And then
                    it's like, you want to make this change, but you don't want to go to a company that is not a great
                    company. You don't want to go from bad, it wasn't a bad situation, but you don't want to better your
                    situation to even worse. Yeah. And so it was just like, I would come to work like ready to roll and
                    just like, right, well, I'm going to do some side projects again or yeah, et cetera. But would you
                    agree you have anything to add on?</p>

                <p>Dalton McCleery (06:42.754)
                    <br>Yeah. You just don't want to go worst. Yeah, yeah, yeah, yeah.
                </p>

                <p>Andy Hinkle (07:00.062)
                    <br>I mean, we pretty much have been feeling the same.
                </p>

                <p>Dalton McCleery (07:03.266)
                    <br>Yup. You, you pretty much hit it right on the head about the same time. I was feeling the same,
                    like just the work just wasn't, it wasn't coming. just sitting here and not doing anything, not
                    learning anything, not working on anything. It's just, kind of like mentally draining to be not
                    billable, not providing value, not being able to move forward for a long period of time. And so,
                    yeah, I did.
                </p>

                <p>pretty much the same thing that you did. I freelance, did some side projects. I actually worked. We
                    started a podcast. I started a company, like just anything to move forward other than just trying to
                    be stagnant or stale. Again, no hard feelings. That's just how I felt for a long time. And I think
                    we're gonna get into the whole job market stuff in just a minute because I have a lot of opinions
                    about that.</p>

                <p>Andy Hinkle (07:37.408)
                    <br>started a podcast.
                </p>

                <p>Dalton McCleery (08:01.134)
                    <br>Cause when you're, you're, when you're in this rut of damn, don't, I don't really feel great.
                    And then you have to go, okay, well, you know, maybe there's a better opportunity and then you start
                    looking and then these better opportunities are just either they're not there or they're just, you
                    have to jump through 70 hoops just to talk to somebody about an opportunity. But I feel the exact
                    same way you did, back last summer. I feel the exact same way you do now having gone through all of
                    that.
                </p>

                <p>Andy Hinkle (08:24.98)
                    <br>Mm-hmm.
                </p>

                <p>Dalton McCleery (08:30.351)
                    <br>Just absolute horrendous six months to a year.
                </p>

                <p>Andy Hinkle (08:35.58)
                    <br>Mm-hmm. Yeah. Yeah, for sure. Yeah. And it's like when I made the decision, I told myself I want
                    the transition to be an obvious choice and one that I would regret saying no to. And so that was
                    that was kind of the hardest thing of like when I was looking for a new job, it was just like I
                    didn't like I didn't put, you know, I didn't apply to everything I saw. And so it was just kind of
                    the silent search. Right. It's just like it's kind of hard.
                </p>

                <p>Dalton McCleery (08:36.386)
                    <br>Yeah. Yeah.
                </p>

                <p>Dalton McCleery (08:49.517)
                    <br>Yes.
                </p>

                <p>Andy Hinkle (09:04.512)
                    <br>because you want to blast it out there like, guys, I'm looking for a new opportunity if you have
                    something, know, I'm all ears, whatever. But it's this battle of like, you want to make it public
                    and you want to look for a new opportunity. But in doing that, if you do make it public, you have
                    this giant sign above your head of when you go into your workplace, like, hey everybody, you know,
                    because everybody will know. just creates tension. Yeah, it just creates less tension and you know,
                    unnecessary drama, et cetera.
                </p>

                <p>Dalton McCleery (09:26.382)
                    <br>Time bomb.
                </p>

                <p>Andy Hinkle (09:32.714)
                    <br>But it was just like, wanna reach out to my contacts, my friends from laracon or whatever. And
                    so it was just kind of this hard battle here.
                </p>

                <p>Andy Hinkle (09:47.264)
                    <br>Excuse me.
                </p>

                <p>Dalton McCleery (09:47.407)
                    <br>Yeah, agree. A hundred percent. So like, you, do you want to talk about your job, searching
                    experiences?
                </p>

                <p>Andy Hinkle (09:54.41)
                    <br>Yep, yes, I would love to. Yeah, so it started like, you know, I've been on Lara jobs for years.
                    I've been, you know, signed on to email updates mostly because it's kind of cool. Like the companies
                    you see on there are like, I didn't know Mercedes used Laravel or whatever. It's just like, that's
                    kind of cool. And so, but, and now I've been kind of closely, more closely been paying attention to
                    like, maybe I could see myself there. But it's so hard because you see these companies are like,
                </p>

                <p>Dalton McCleery (10:10.808)
                    <br>Yes, yes, exactly.
                </p>

                <p>Andy Hinkle (10:23.296)
                    <br>Maybe, you know, it's just like I always go back to that thing of like I want this to be an
                    obvious choice and I May have heard that company. I maybe I don't know the people there or whatever
                    So it's always been really hard for me to apply for a job for a position so About it was over a year
                    ago. We just had a newborn son And laracon or sorry. I just had a newborn son and Laravel started
                    hiring
                </p>

                <p>They posted all these new positions. I thought it was just for, it was like infrastructure, software
                    engineer. I thought it was like one infrastructure guy, one software engineer. And everyone I knew,
                    literally everybody, not everybody, but was just so many people I knew applied for that job. It was
                    just like for the software developer, you know, it was just like, even over on Reddit, they are</p>

                <p>Dalton McCleery (10:56.174)
                    <br>Remember that.
                </p>

                <p>Andy Hinkle (11:19.68)
                    <br>our moderators, we're all chatting and they're like, yeah, I applied. And other guy's like,
                    yeah, I applied too. Like I got thrown in my, why not? It's Laravel. And so I just didn't have that
                    mental energy to get there to do, I just had that newborn son. And it was just like, I didn't want
                    to have to handle the, like one, the process of like how, what I would even write in my cover
                    letter, what I would even do, you know, to just like that part of that. And I was like, I don't know
                    if I can handle rejection right now. was like, I'm so.
                </p>

                <p>Dalton McCleery (11:24.046)
                    <br>Might as well. Yeah.
                </p>

                <p>Andy Hinkle (11:48.28)
                    <br>know, dealing with all this is like, you know, in something like that, that major, cause that's
                    like, that's like cream of the crop, you know, it's just like something, yeah. Right, you're right.
                </p>

                <p>Dalton McCleery (11:55.694)
                    <br>That's end goal. That's like you get there, you're there till you retire.
                </p>

                <p>Andy Hinkle (12:00.498)
                    <br>Yeah, it was that was really tough. And so that was that was even before my job search, but that
                    was like one of those like, man, I don't know if I can pass this up. And so between that and then
                    shortly before that, Jake Bennett reached out to me over Twitter DMs. We were talking about they
                    have that him Jake Bennett and Michael Dorinda have a podcast called North Meet South, Michael being
                    from Australia. They have a podcast where they just talk.
                </p>

                <p>just all sorts of, you know, whatever is on top of their mind, usually business workings and layer of
                    all stuff about what they should use. And it's very interesting. It's a really cool podcast. So I
                    was listening to an episode and they're talking about some like Australia stuff about how like, you
                    know, I can't remember exactly what it was, but it'll be like some of these things of like, just
                    Australia things like when you flush a toilet in Australia, I didn't realize the water goes the
                    opposite direction. So just like stuff like that. But it was just like,</p>

                <p>Dalton McCleery (12:53.454)
                    <br>I've heard that. I've heard that.
                </p>

                <p>Andy Hinkle (12:57.536)
                    <br>Jake's like, I didn't realize that. And they're giving him a hard time. And so I DMed him, was
                    like, I didn't realize that either. And so was like, maybe it's just us being from the Midwest.
                    Maybe we're dumb and we don't know. And so, cause he's from the Midwest as well. don't, but anyway,
                    and we just started getting the chat and he's like, dude, I don't know where you're at, but if
                    you're ever looking for an opportunity, excuse me.
                </p>

                <p>Dalton McCleery (13:07.885)
                    <br>Hey
                </p>

                <p>Andy Hinkle (13:21.6)
                    <br>He was like, dude, I don't know where you're at, but if you're ever looking for an opportunity,
                    I'm currently hiring at the moment. And this was before I was looking around the same time, I just
                    had a newborn and I was like, dude, yeah, I appreciate it, but thanks, but not right now, et cetera.
                    So yeah, we ended up going to Laracon Nashville, gets talking to him again, we just started talking
                    about state machines and stuff and he was just like, hey man, know, I...
                </p>

                <p>just still wanna, we just got started out and talking more just, and he said it again, like, hey, I'm
                    hiring if you're, if you have anything, you know, if you're wanting to switch or anything. And it's
                    like, yeah, let's, that was kind of the time that was shortly before, you know, the whole, I'll just
                    back up a little bit. So yeah, he started talking to me and he said, hey man, we're hiring. And then
                    I said, yeah, I'm all ears at this time. I wasn't really looking for, you know, looking for a
                    change. It was.</p>

                <p>pretty steady work going on and pretty happy with everything going on. It's like, but I'm always open
                    ears to it if there's something and we just got talking. It was more, again, it was just kind of
                    that newborn thing. It's like my newborn son, it just kind of wrecks everything. It's just like, you
                    don't want that big of a transition happening when you just have kids. is one, I went from zero to
                    my first kid. It was just like that. That was already a lot of big transition. So anyway, that was
                    the second time you reached out and</p>

                <p>Dalton McCleery (14:35.788)
                    <br>much.
                </p>

                <p>Andy Hinkle (14:46.464)
                    <br>I listen to the North meets South podcast all the time. You know, it's just one of those things
                    that it comes on when I see it when I'm on the road or something. was like, I get really excited and
                    listen in. And every time that Jake talks about some of the problems they deal with, like, man, I
                    should have, I should have said yes, I should have, should have went back. And so there's been so
                    many, and then since past last summer, there's been so many times of like, should I DM him? I reach
                    out to him be like, hey, if you're, if you're still in, if you still have
                </p>

                <p>any openings I'm interested, I like, no, it's just like, that's just, I don't know. Just something
                    like that just felt kind of weird. And then it was like the week of Thanksgiving and he just
                    randomly DM'd me and was like, hey man, just by any chance you're looking for a new job. And then so
                    like, yes. So I just like, I woke up, I'm like, no way. And I'm like, you know, I could not believe
                    that. Yeah, just like that telegram message. anyway, it ended up into, I'm sorry.</p>

                <p>Dalton McCleery (15:35.404)
                    <br>Yeah.
                </p>

                <p>Andy Hinkle (15:45.472)
                    <br>Gosh dang it, it's freaking cough dude. Anyway, so it ended up until we ended up talking. was
                    easiest like, I'll get into the process. feel like some of the other things I've been through in
                    this whole thing, but it was the easiest thing. We just had like an hour talk. We barely talked
                    about, you know, we just talked about life and just about what he's looking for. And it just kind of
                    matched up. He's like, you know, it just was a really good fit for me.
                </p>

                <p>Dalton McCleery (15:46.766)
                    <br>Do your thing, man.
                </p>

                <p>Andy Hinkle (16:11.964)
                    <br>And so far, it's just going into a new job. It's just like, you hear about interviews, you read
                    up all you can, but it is so nice, seeing all the time I invested on researching the company and
                    researching, like, what they stand by and then actually what they, processes they have, like, you
                    know, some of the process interviews, like, we do this or we do that. And then you actually go in
                    into the company or you look under the hood and it's just like, it's kind of a mess, right? Or
                    there's something that is kind of, you know.
                </p>

                <p>I'm going on there. So it's so nice going into the company. Like you're already nervous going in and
                    it's on the other side when you're actually there, it's even better than you thought. It's just,
                    it's so relieving, dude. It's just like the processes that they have like, I was hoping it would be
                    this, but it's way better than that. It's just, it's so nice to see that. And so it's been, I've
                    been here for what, two weeks now? It's been.</p>

                <p>Probably some of the best two weeks of programming I've had in a long time. It's been really good.
                    Some great refactors. It's been awesome. It's been really good. So yeah, that's kind of my story of
                    how I got from. I will say that I mentioned the Laravel thing, that how I was kicking myself. So a
                    while back I reached out to Josh.</p>

                <p>Dalton McCleery (17:21.368)
                    <br>A to Z.
                </p>

                <p>Andy Hinkle (17:33.426)
                    <br>Siri about like if there's any openings or you know, this was last summer and he's like, no man,
                    you know, we're looking at hiring, you know, overseas at the moment. And then like a week before I
                    started at Wilber, Josh Siri reaches out to me and he's like, hey man, we're hiring again. You want
                    to come work for, if you're interested I can like, dude, like what is happening right now?
                </p>

                <p>And so I was like, yeah, man, I'm going to go work with Jake Bennett, but I really appreciate it. But
                    yeah, was, that was, that was wild. seeing, just how life can really just, you know, just really
                    can. I spent all summer looking for, know, just trying to look for that new opportunity. And then
                    within like a couple of weeks I get, I get something from, you know, from Jake over at Wilber and
                    then Laravel they came to just like, they didn't actually offer me something, but they were like,
                    Hey, we are, we are hiring it if you, you know, we.</p>

                <p>Josh Sherry sent me a DM, he was like, hey, if wanna come over, can have a better chat about it. So I
                    might remove this layer of all thing from the show. I'll let you know. But yeah, but anyway, it's
                    been really good. The bad part is just that journey. Now that's the good part, right? That's the
                    good part. The bad part, yeah, and me and you have been like in close contact about like...</p>

                <p>Dalton McCleery (18:48.814)
                    <br>That's what they tell ya.
                </p>

                <p>Andy Hinkle (18:53.662)
                    <br>what works for you and what's been working well for me. And you've provided a lot of great tips.
                    And so I'd like to get to the tips. Do you wanna do that now or should we wait till the end about
                    what we learned?
                </p>

                <p>Dalton McCleery (19:07.278)
                    <br>how about, how about I tell you, how about if I tell you my journey and then I can, we can go
                    through tips, from there. Cause there's a lot of, there was a lot of like learning milestones that I
                    learned when trying to go to the job market of like, this is not working. What if I just tweak this
                    one little thing and all of sudden, I get replies now. So like,
                </p>

                <p>Andy Hinkle (19:09.343)
                    <br>You
                </p>

                <p>Andy Hinkle (19:15.488)
                    <br>Okay. Okay.
                </p>

                <p>Andy Hinkle (19:21.162)
                    <br>Yeah.
                </p>

                <p>Andy Hinkle (19:30.304)
                    <br>Yeah, so let me wrap that up real quick and then I can switch to you. So that was a bit of my
                    journey and how I got there. I know Dalton, you've had quite the journey as well.
                </p>

                <p>Dalton McCleery (19:42.798)
                    <br>I have, yeah. So not quite as extravagant as, as Laravel. I saw that job posting for Laravel as
                    well. I was like, there ain't no way in hell I'm going to get that. So I just, I did not even apply
                    to any of that. There was no way that there was no way in hell. Uh, I actually had the opposite
                    thought of, I'm so picky about where I'm going to go next, that it's going to be, it's going to be
                    impossible for me to find a gig.
                </p>

                <p>And that's what led me to like, what if I just did my own company thing? Like if I've got, I've got
                    ideas, I don't want to just like put them on the back burner and go somewhere else and keep them on
                    the back burner. just like, let me try them out. Let me do my own thing, my own company, my own way.
                    So I tried that. it's working ish so far. Like it's not, it's not great, but it's not terrible. so
                    when I finished building those products and I was just sort of sitting here and marketing it, I went
                    back to the same thing of like,</p>

                <p>I probably should get a job that's stable and has like actual longevity and like actual work that I
                    can feel valued in. So I started, I think my journey is like six months long, is I started applying
                    to gigs here and there. And it was probably three months before I even got a reply for anything.
                    Like I made a resume, I made a cover letter for everything.</p>

                <p>I didn't use any AI. was no chat GBT. I remember that whole like Ian Landsman posted that one job and
                    I was sort of following. We were both following his replies on Twitter of like, if you do this, you
                    know, this, this makes me look at your resume more than somebody else. Right. Even if you just put a
                    cover letter, just any, any like one paragraph cover letter, Hey, interested here's, here's about
                    me. What not as long as it's not AI written, you should be fine. So I started writing just like</p>

                <p>Andy Hinkle (21:13.621)
                    <br>Yeah.
                </p>

                <p>Dalton McCleery (21:38.318)
                    <br>cover letter after cover letter after cover letter. And it was actually quite exhausting. I felt
                    like I was writing a novel like every time. Like, cause you can sort of say the same thing and you
                    can copy paste like little sentences, but like if you copy paste all of it, they know. So
                    ironically, I started doing cover letters more. That didn't get me any replies. Ironically. Um, even
                    though it is still a great tip, you should write a cover letter, even if it's just a sentence or
                    two.
                </p>

                <p>Andy Hinkle (21:45.332)
                    <br>Yeah, yeah.
                </p>

                <p>Dalton McCleery (22:04.43)
                    <br>I'll tell you the one thing that really started getting replies was I made a custom landing page
                    on my website for any job that I applied to It's like Dalton mcleary.com slash resume slash whatever
                    the job title was I spent some time putting basically copy pasting my resume into this but like
                    tailoring it to the job description and At one point I started like quoting the job description like
                    hey you guys say you're looking for
                </p>

                <p>You know, this and this, I'll quote that with a link to the job description and say, okay, well I've
                    done this. I've done that. I've done this. And that would actually get me replies, but it wasn't, it
                    wasn't good replies. was thanks for your application. We've, we've decided to move on. Right. It's
                    like, well, I've, I've at this point I'm spending like hours on each job. Cause like you, I'm not
                    going to apply to just any old thing. There were probably a couple of days where I was like, I'll
                    settle for this, but they never ended up doing anything.</p>

                <p>Andy Hinkle (22:36.958)
                    <br>that's brilliant. Yeah.
                </p>

                <p>Andy Hinkle (22:46.111)
                    <br>Yeah.
                </p>

                <p>Andy Hinkle (22:53.472)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (22:57.376)
                    <br>Mm-hmm.
                </p>

                <p>Dalton McCleery (22:59.448)
                    <br>But spending hours on an application, making a custom web page, making a cover letter, making
                    sure that my resume was tailored specifically to that gig. If the job mentioned filament, I would
                    add filament to my resume. Those types of things. So those little tips just, they just get me a
                    little bit closer, they get me a little bit closer. I was getting no replies, now I'm getting
                    rejection replies.
                </p>

                <p>Andy Hinkle (23:21.396)
                    <br>Yeah.
                </p>

                <p>Dalton McCleery (23:25.08)
                    <br>which some people might not see as like a good thing, but hey, at least I don't have to sit here
                    and think of did they get my stuff, et cetera, et cetera. And then so I think it was probably
                    halfway through that three month period where I think you, me, and Robert Wade, the guy who did the
                    artwork for our podcast, met and was like, let's just look at each other's resumes, right? Like read
                    my resume, is this good? Is this not good?
                </p>

                <p>Andy Hinkle (23:32.33)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (23:49.246)
                    <br>Yes.
                </p>

                <p>Dalton McCleery (23:51.054)
                    <br>What's working, what's not working? So I was like, I put my profile, I put a picture of me in my
                    resume, just like on the side. And Robert, being the great designer that he is, he's like, if you
                    put that as a circle, as an avatar, and put it next to your name so it looks like your picture, your
                    name, it looks better. I was like, I would have never done that in my entire life. So another great
                    tip is have friends that you can talk to and send your resume to and like, does this look good?
                </p>

                <p>Andy Hinkle (24:09.93)
                    <br>Yeah.
                </p>

                <p>Dalton McCleery (24:19.276)
                    <br>Like be honest with me, are you reading this? If I sent you this and it's got three bullet
                    points, are you reading those three bullet points or are you not reading those three bullet points?
                    So we've got great feedback from that. Hopefully these tips are gaining on you. And then so one of
                    the other things, or one of the last things that I did that
                </p>

                <p>Andy Hinkle (24:19.924)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (24:28.49)
                    <br>Do gloss over them. Right.
                </p>

                <p>Andy Hinkle (24:42.549)
                    <br>Yeah.
                </p>

                <p>Dalton McCleery (24:48.608)
                    <br>actually like broke through for me was this is so stupid and I don't think it actually works but
                    I'm gonna tell it anyway like some sort of like witch doctor I put my resume in dark mode
                </p>

                <p>Andy Hinkle (25:01.437)
                    <br>I have not heard of that. So wait, so you're talking about your website resume or your like your
                    PDF? okay.
                </p>

                <p>Dalton McCleery (25:03.22)
                    <br>I put my resume in so-
                </p>

                <p>Nope. My PDF, my PDF. So I, I took my resume after, after we did all of that other stuff, had some
                    great feedback from you and Robert. made those changes. I applied to a few other places, wasn't
                    getting anything. It's like, you know what? I'm to put a black background, not like a black, black
                    background, just like a, you know, tailwind gray 800. I think I literally copied that, that, that
                    code over. And then I changed all the texts to, you know, tailwind gray 200.</p>

                <p>Andy Hinkle (25:30.314)
                    <br>Just BG, yeah.
                </p>

                <p>Dalton McCleery (25:36.736)
                    <br>and the title text, the gray 100, whatever. I literally did not change a single thing about my
                    resume other than I just inverted the colors. The next week, I got three interviews.
                </p>

                <p>Andy Hinkle (25:49.376)
                    <br>Yeah, that's actually, I didn't realize you did that. But now that you mention it, nobody, oh
                    yeah, nobody prints off resumes anymore. So I mean, that's kind of a neat thing to do is like,
                    because before it's like, yeah, put it in white so it's easier to print than when you're in the room
                    or you know, the interview room. I guess if you're not in person, I mean, why not? If you want to
                    stand out from the pack, you know, from this pile of apparently in landspins that 1200 applicants,
                    if you want to stand out.
                </p>

                <p>Dalton McCleery (25:50.784)
                    <br>It's like it just hits so hard. It's the oddest thing. I don't think I told you that.
                </p>

                <p>Andy Hinkle (26:18.741)
                    <br>If you want to stand out, put it in dark mode. Like, why not? Just, yeah, that's actually a
                    brilliant idea since nobody prints them anymore. Yeah.
                </p>

                <p>Dalton McCleery (26:25.56)
                    <br>So I'm hoping, again, I can't confirm this and my current boss didn't say anything about the
                    dark mode resume, but I'm hoping that, this resume looks different than all the other ones. It's got
                    different things. Let me look at it at least more. this guy looks good. Let me give him a call. So
                    like literally like you, within the span of one week, I got like three phone calls of like, hey, can
                    we meet? Hey, can we meet? Hey, can we meet? Sure, yeah, yeah, yeah, sure, whatever. So it's like.
                </p>

                <p>two full weeks of just like interviews and all kinds of interviews. And so I think what we're going
                    to get to next is the interview process, right? Do you want to talk about the interview process?
                    Okay. So that's, that's my journey in, in a nutshell and the little like micro adjustments that I
                    made along the way to get to like an actual interview. So do you have, do you have like extra tips
                    or any other tips that I might've missed that we, that we both did or that you did separately?</p>

                <p>Andy Hinkle (27:05.357)
                    <br>man, yeah. Yeah.
                </p>

                <p>Andy Hinkle (27:23.04)
                    <br>Yeah, one thing that you mentioned, I just wanted to make sure that it's, you said it really
                    well, but it's like a landing page for the job you're applying at. And so it could be like
                    andyhinkle.com slash hey dash whatever the company name is. it's just like, here's why I wanna work
                    for you. Like do that, like that's just, nobody does this. I don't know if it you that told me that.
                </p>

                <p>Dalton McCleery (27:34.754)
                    <br>Yeah, yeah, custom.
                </p>

                <p>Dalton McCleery (27:47.245)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (27:51.104)
                    <br>but, or if we saw it somewhere, but I remember I got, you told me that originally and I don't
                    know if we both piece it together or what, but it's just like, once I, just kinda, I didn't actually
                    like pull the trigger to do it in a full implementation, but just like, if I was applying at like
                    Laravel or something, if I, that was kind of what I was waiting on until this whole Jake thing came
                    through and then it just, it just all happened. I couldn't be happier, but the, but yeah, I have
                    like, you know, I pretty much built a,
                </p>

                <p>Hey, Laravel, you know, page. But yeah, just something like a landing page. That's really, really
                    nice. Or just if you don't have a personal website, put that out there. Just, it doesn't have to be
                    anything crazy. It's just like, hey, here's the things I'm interested in. I have a great blog post
                    I'm gonna have soon about, can make a Laravel component and put your public PRs that you've
                    submitted on open source, have a list on there. So even if you don't like care, you don't have to
                    share everything.</p>

                <p>But this thing, I don't want to get too off into tangent, but this thing automatically updates every
                    day of like if I submit a public PR somewhere, it'll automatically show up on my website of like,
                    hey, here's what I've been up to lately. So, but your website should be like, here's who I am.
                    Here's the stuff I like to talk about. And here's what I've been doing recently. Just those three
                    things. And so if you're looking for a new job, that's kind of the way to go. But just some tips
                    there. And yeah, as far as the actual process goes, do you want me to kick that off?</p>

                <p>Man, we've been, it's been just, interviews are so broken. from, we've heard it from the, from the
                    side of people interviewing and how broke it is on their side about how they just can't find quality
                    people. And now we're on the other side of like, why do we have to do these leap, like code stuff,
                    these problems that just aren't real world. So you want me to kick that off? Just like how I.</p>

                <p>Dalton McCleery (29:43.266)
                    <br>Yeah, if you thought the whole like getting to an interview thing was depressing, wait until you
                    hear about once you get the interview, getting to a job offer is sometimes worse. And I say
                    sometimes, but almost all of mine were horrible. So yes, let's start with you.
                </p>

                <p>Andy Hinkle (29:58.143)
                    <br>Right.
                </p>

                <p>Andy Hinkle (30:01.78)
                    <br>Yeah, mine are also terrible too. it was like, so the first thing I did, another tip you can do
                    is on LinkedIn, can set your, there's a status on there, on your profile, you can be looking for
                    jobs, and it doesn't actually say, you can make it public, but you can also do it private where it
                    tells recruiters and people that, hey, you're looking for a new place. But once I set up that, I got
                    all sorts of messages, all that, but it was usually like a PHP developer, I'm like,
                </p>

                <p>No, I don't want, I want Laravel. I don't want PHP. Like I love, I love PHP. Love Laravel. I hate
                    just but hope PHP, no way, you know? So just like looking for a level position. anyway, but I would
                    be, I would get through recruiter requests to be like, saw your profile. It looks great. We have a
                    fortune 500 company looking for a level developer. Are you interested? I'm like, yeah, that's
                    everything I'm looking for right now. If you have a big company, yeah. Basically I was looking for
                    like a, like a</p>

                <p>well-established company that was mostly working in Laravel, but I'm happy to do something different.
                    But that was just kind of my thing I put out there. So you get into these discussions and software
                    and just development programming is just one of those few jobs where the interview is often harder
                    than the work that you're actually doing. It's like, you'd have these like, yeah, but there's a
                    website called like Leetcode.</p>

                <p>Dalton McCleery (31:24.064)
                    <br>unnecessarily so. It's unneccessary.
                </p>

                <p>Andy Hinkle (31:28.958)
                    <br>just go on there and start doing stuff because that's, this is some of the stuff they'll be
                    asking. It'll be like, they would have these leak code stuff. It'll be like, write a function. It'll
                    be like, write a function that checks if an array is a palindrome, but here's like the catch. You
                    can't use loops, can't use recursion, can't use any built-in functions, array reverse, none of that,
                    you know? Just like, so.
                </p>

                <p>Dalton McCleery (31:30.893)
                    <br>You
                </p>

                <p>Dalton McCleery (31:53.678)
                    <br>Yeah, and write it with one hand and your nose or some weird stupid junk like that.
                </p>

                <p>Andy Hinkle (31:58.383)
                    <br>Also, also the rate, the array could be massive. So you need to work in, uh, the consist, you
                    need to be in, uh, like aware of memory concerns, right? It'd be something like that. So a
                    palindrome, by the way, do you know what that is? Um, like for the listeners. Okay. Well, palindrome
                    is like a word or a phrase that's like the same as it reads forward as backwards. So it'd be like
                    radar or race car. Yeah. So
                </p>

                <p>Dalton McCleery (32:19.214)
                    <br>race car.
                </p>

                <p>Okay, yeah, I know.</p>

                <p>Andy Hinkle (32:24.382)
                    <br>So I was like, okay, well I can compare the first and the last elements and the second to last
                    and so on, right? But wait, no loops, no recursions, no built-in. With a array this big, I have to
                    deal with also memory issues. At this point, I'm sitting there realizing this isn't a real world
                    problem. In the actual job, you would be doing something like Laravel's built-in collection methods,
                    or better yet, actually solving a real business problem.
                </p>

                <p>But here we are, we're playing some bizarre game where we're solving these imaginary scenarios with
                    these imaginary rules.</p>

                <p>Andy Hinkle (33:03.178)
                    <br>It's coming, sorry. I could feel it So it makes you wonder, it makes you wonder what business
                    rules they're actually solving, what business problems are actually solving and if they're taking
                    their time doing this or like, what's this actually? And I understand from their perspective, it's
                    trying to understand the way that you think. But if it was me, if I was hiring somebody, it just
                    doesn't just, what you need to understand is how it captures their experiences, their...
                </p>

                <p>how they're meticulous on their code or their ability to deliver on time. So it's kind of a flawed
                    system. Another one I saw that another recruiter sent my way is like this, I had to build a layer of
                    like application that plugged into this New York Times API of the best books or best reads. And I
                    had to make an API that, or that would essentially like absorb that data, put it into a DTO and make
                    it respond back out.</p>

                <p>but then they're like, send over your GitHub repo when it's done. And so I'm like, what? And I was
                    like, okay. So I sent over the link and I did all one night and I sent it over and I'm like, I'm
                    curious. What if I just type in some like common, like New York API controller into like GitHub
                    search and out came all these repos of people doing the same thing of like I was doing. Some of them
                    are even recent and my gosh, like, I mean, I don't want to toot my own horn, you know, being a
                    meticulous developer and stuff like that, but I saw some.</p>

                <p>Dalton McCleery (34:18.158)
                    <br>No.
                </p>

                <p>Dalton McCleery (34:27.214)
                    <br>Tud away. It's your podcast. can do whatever you want.
                </p>

                <p>Andy Hinkle (34:28.86)
                    <br>I saw some awful, I saw some awful stuff out there. It was terrible. you know, seql injection,
                    you name it. but that was, that was actually one of the more better ones. But, but then again, I'm
                    thinking as an applicant, like, I don't know if people might be smart, know, smart enough to type in
                    GitHub search about, you know, like I did, you know, so I'm like sitting here thinking like anyone
                    could find this and just reuse it. And it's like, I like what this guy did over his app and I'm
                    going to reuse that.
                </p>

                <p>That never happened for me. I've already built it and submitted it by the time I even realized it.
                    But it could have been like one of those moments too. like, this system is flawed too. It's just
                    like, if it was me, it's just like, you really have to think of, have to be very meticulous. And I
                    want a company that realized those very specific, just those minor details. I want them to be
                    thinking about that. Just like having a, like that, a GitHub repository public. Just like, why not
                    create them a private repository?</p>

                <p>link them to it and have them submit their code. Just something that is very specific. That just kind
                    of, puts that bad taste in your mouth. And then the further you go into the interview process, you
                    kind of realize over time of like, I'm not even there yet. And I can already see under the hood of
                    all the, all the things that are going to be a problem. And so it's just like, you want like, I keep
                    reminding me of this thing I always said is like, you want the transition to be obvious and one that
                    you would regret saying no to.</p>

                <p>And anytime, like this situation, I just said, nope, this isn't good fit. And the pay was like, that
                    was the only thing that was kind of keeping me, know, glued in there. That was a really good one.
                    Yeah, it was like some, that was the only thing I couldn't say no to. That was the one that was
                    kept, that was the only one that kept me hanging. Cause usually I don't listen, you know, I don't
                    respond to those recruiters, but that pay was like, that was incredible. So I was just like, all
                    right, I'll hear you out. But anyway, it was, it just makes you wonder what kind of problems they're
                    actually solving.</p>

                <p>Dalton McCleery (36:04.142)
                    <br>I remember you told me about that one.
                </p>

                <p>Ha ha!</p>

                <p>Andy Hinkle (36:25.248)
                    <br>And so after that, after those two experiences, I'm like, you know what? I was just kind of
                    mentally drained at that point. This is going into November. like, I'm just going to stop applying
                    at any place unless it's like at that point, unless it's like I've heard of them. I want to
                    absolutely work there. just, and it just didn't work out. And so just stopped replying to all the
                    recruiter requests and everything. And, and then along came Jake and it was fantastic. That was the
                    easiest process. but, cause in the full transparency, the first time around,
                </p>

                <p>like Jake and I did do a technical interview just by understanding like the things I talked about. He
                    was very meticulous in that. And that's why I was like, man, I love this. It was just not a good fit
                    because I just had a newborn at the time. And so, but yeah, that was kind of my whole experience. It
                    was awful. Like, and then like you said, applying it anywhere, it's just like no one's hiring, you
                    know, right now anyway. And so, Caleb Porzio did a bit on this too on, yeah, did you listen to that
                    podcast?</p>

                <p>Dalton McCleery (37:18.779)
                    <br>mention that as well. I didn't listen to the pipe but I've seen the clip of him and Taylor
                    talking about it.
                </p>

                <p>Andy Hinkle (37:25.792)
                    <br>Okay. Yeah. It's like, and I fully agree with this. Like two years ago, my youngest brother
                    actually, he's been trying to find his place where he wants to work. And two years ago I told him
                    programming, but he's coming where he's actually coming into town this weekend. And if he would ask
                    me this weekend, I'm like, no, dude, just go do anything else. Don't do programming. Like a junior
                    programmer is really hard right now. It's for them to find a, you hear all these boot camps of, you
                    hear the stories of these boot camps starting up and.
                </p>

                <p>people not finding jobs these days for juniors and it's tough. It's like, yeah, kind of wonder with
                    AI and everything that's really changed it. And then as well as these hiring freezes, et cetera. So
                    you really have to be a senior to just to get a normal job now. And so anyway, yeah. Yeah.</p>

                <p>Dalton McCleery (38:08.898)
                    <br>Yeah, not guaranteed senior pay, but you have to like, you have to be able to do stuff.
                </p>

                <p>Andy Hinkle (38:15.72)
                    <br>At a senior level, yeah. Or else Claude or Chat2PTL can do it for you.
                </p>

                <p>Dalton McCleery (38:17.196)
                    <br>Yeah. Crazy dude. They'll take our jobs, bro. Yeah. I've, I've had a very similar experience,
                    with you. a lot of my, and this, this sucks. Like I said, it's, it's depressing just to get it, just
                    to get interview, but it's also depressing to get, through like a technical interview. So I've, I've
                    bombed technical interviews before and you know,
                </p>

                <p>during my job search where, but in my, I'm gonna put this into my defense that it's one of those ones
                    where you get on a phone call with somebody, you screen share with them so they can see your screen.
                    They show you some just abnormal, weird problem to solve. They're like, okay, you're gonna write
                    this in an online sandbox so you don't get to use an IDE, you know.</p>

                <p>Regardless, you don't get sublime text PHP storm VS code. You're do it in some online editor That
                    doesn't have any auto correct or any auto complete You are not allowed to use anything except for
                    the PHP documentation And it was like I want you to solve this these two problems in an hour on an
                    online IDE and all you're allowed to look up is PHP functions right and I'm screen sharing my screen
                    so he can't like see that I'm doing anything else</p>

                <p>Andy Hinkle (39:38.624)
                    <br>Mm. Mm-hmm.
                </p>

                <p>Dalton McCleery (39:40.674)
                    <br>Bombed the hell out of that. I didn't even finish the first one in an hour. Right? Sucks.
                </p>

                <p>Andy Hinkle (39:44.838)
                    <br>my gosh, yeah, I mean, can't remember the last time that, like, the whole thread needle thing,
                    like which one's the thread, which one's the needle in arguments, like that is just, you'd have to
                    look it up every time. Or just trying to remember some of the string helpers, yeah, that's a
                    nightmare, dude. Just, why are we tying our hands here? Yeah, for sure, go ahead, sorry.
                </p>

                <p>Dalton McCleery (39:56.194)
                    <br>Yes, I don't remember that off the top of my head.
                </p>

                <p>Dalton McCleery (40:02.638)
                    <br>Yeah. But well, yeah. And the thing is that it's a Laravel job. applied for a Laravel gig. I'm
                    to be working in Laravel. The email that I got to prep for it was like, set up a base Laravel, you
                    know, application. Cause the second task is going to be in that. I didn't even get to that task. I
                    failed it in an hour. And that guy was like, yeah, uh, you know, he asked me, he's like, so, so this
                    is the salary you're looking for, you know, at a senior level. I said, yeah. And he goes, okay,
                    well, thank you.
                </p>

                <p>Andy Hinkle (40:23.997)
                    <br>yeah.
                </p>

                <p>Dalton McCleery (40:32.61)
                    <br>And I'd never heard from that guy ever again. Right. I got another one. I got another one that
                    was like, Hey, talk to HR had a nice phone call with them. They were lovely. HR was always lovely
                    that I talked to. I sound British. Lovely. they're like, yeah, go talk to this tech lead guy. Talked
                    with him for an hour. Okay. Now you're to talk to this other tech lead guy for an hour. Did that.
                    Okay. Now you're going to do another one of those online things. You're not going to use your IDE.
                </p>

                <p>Andy Hinkle (40:36.231)
                    <br>Ugh, yeah, it's tough.
                </p>

                <p>Dalton McCleery (41:00.162)
                    <br>You're only allowed to use PHP documentation. I was like, fuck or sorry. was like, damn, I'm
                    going to fail this one too. Right now I'm like four interviews deep. And then now they're having me
                    do this coding challenges quote unquote, the last step that one passed. I passed it in like 30
                    minutes. It was like, I think I sent you that one. It's like, okay, I got it. I got this one. This
                    one was the one that I wanted. It was in the role that I wanted. Liar votes for company that I knew.
                </p>

                <p>Andy Hinkle (41:12.32)
                    <br>Mm-hmm.
                </p>

                <p>Wow, Okay. yeah, yeah, yeah.</p>

                <p>Dalton McCleery (41:27.212)
                    <br>or that I didn't know, but I'd researched them so I knew that they were good. They had multiple
                    tech leads, like their system was great. The only thing that sucked was they used GitLab instead of
                    GitHub, but I was willing to let that slide. Only to find out that I had yet another task to do on
                    top of that, and this was the take-home test. And I know that everybody rolls their eyes when they
                    do that take-home test because it's that one, it's like, yeah, don't spend a lot of time on this,
                    just, you know, do this real quick, send it in, just, I wanna see what it is.
                </p>

                <p>I sent you the instructions for that test, do remember it? It was like, I had to set up a VPN, they
                    had to give me access to a VPN, I had to set up a server, a test server on their infrastructure,
                    like they had to give me credentials to get in the VPN to do these things. And then I had to
                    install, like, I had to install PHP Storm on this server, so all the work that I was gonna do was
                    through a VPN, you know, through...</p>

                <p>Andy Hinkle (42:01.118)
                    <br>Yeah, right.
                </p>

                <p>Dalton McCleery (42:25.094)
                    <br>like Windows, whatever that application was on somebody else's server. So was coding on somebody
                    else's server through the internet. Just to get to the task, it took me like four hours. I was like,
                    guys, no thanks. I'm like four interviews deep. I've passed your technical interview tests. This is
                    unnecessary. No thanks, I'll pass. Because ironically, again, I had three interviews in the same
                    week, so was doing that and two other interviews. So it might be my bad, I don't know.
                </p>

                <p>The other interview that I did was in Laravel and I will compliment them on that. But it was one of
                    those ones where it's like, Hey, here's five steps to a task. And the steps are like, install
                    Laravel, install Livewire, write a Cedar for users and organizations, write a unit test for that
                    Cedar. And then it was like, now write one where you can favorite Reddit threads, right? And you can
                    only have five favorites at a time. So if you favorite a sixth one, the last one goes off. was like,
                    that last part.</p>

                <p>Andy Hinkle (43:14.505)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (43:20.426)
                    <br>Yeah.
                </p>

                <p>Dalton McCleery (43:25.218)
                    <br>That's a good technical test, unnecessary to do all your stuff. They were good. That was a good
                    tech test. Now I think just like you, the gig that I took, I didn't do a technical test for. I
                    talked with my now boss, Jeff, Jeffrey Cobb, shout out. And it was just like, we just talked for
                    like two hours. I think we were only scheduled for one. We talked for two hours. And he did ask me
                    technical questions. And I'll be honest, I did get some wrong. Like it wasn't.
                </p>

                <p>I didn't knock it out of the park, but it was just like, let's talk. Let's talk shop. Let's talk
                    tech. Like, what do you like? you like filament? I love filament. Let's, know, let's talk about
                    filament. What's your favorite part about filament plugins, whatever, whatever that talk went so
                    good. And I felt so good after that. He sent me a message. I was like, Hey, let's talk again
                    tomorrow. Just let's let's shoot. Let's shoot the shit again for like an hour tomorrow. I think we
                    talked again for like two or three hours the next day. I was like,</p>

                <p>Andy Hinkle (43:56.928)
                    <br>That's the best way to get to know somebody. Yep. Yep.
                </p>

                <p>Andy Hinkle (44:21.374)
                    <br>Nice, yeah. Best way to know somebody.
                </p>

                <p>Dalton McCleery (44:23.054)
                    <br>This I think this this is getting somewhere right and I think I got I got the offer letter on
                    like the Wednesday after that And it was again. It was it was like what you said It's like it should
                    be no-brainer and when it when I got it, was like this. It's a no-brainer I like the guy I like the
                    way that he he works the way that he described everything works Like that's I want to work for
                    somebody like that. I want to work in these kinds of conditions I said yes the same day easy as that
                </p>

                <p>Andy Hinkle (44:31.168)
                    <br>Wow, Easy enough, yeah. It's always just simple, yeah.
                </p>

                <p>Andy Hinkle (44:52.586)
                    <br>Awesome, yeah.
                </p>

                <p>Dalton McCleery (44:52.897)
                    <br>So moral of the story, don't ever do a tech test. If they ask you for one, deny it. Decline.
                    Just rescind your resume. Don't ever do a tech test.
                </p>

                <p>Andy Hinkle (44:56.746)
                    <br>Yeah.
                </p>

                <p>Andy Hinkle (45:04.512)
                    <br>Hey, 30 seconds, I'll be right back. My phone's on like 3%, sorry. Just give me a sec, yeah.
                </p>

                <p>Andy Hinkle (45:45.376)
                    <br>Alright, just one second.
                </p>

                <p>Dalton McCleery (46:13.25)
                    <br>Nice. Nice screen. Inception.
                </p>

                <p>Andy Hinkle (46:15.648)
                    <br>Yeah, it's not charging,
                </p>

                <p>Dalton McCleery (46:21.142)
                    <br>Listen, it's already like 4.03, so if you want to like last 10 minutes, run through the Laracon
                    and cloud stuff. If your phone will last that long.
                </p>

                <p>Andy Hinkle (46:28.608)
                    <br>Yeah. Let's see, just a second. Yeah.
                </p>

                <p>Let's go this side. Sorry for your my squeaky chair.</p>

                <p>Andy Hinkle (46:41.118)
                    <br>There we go, we're charging. Alright.
                </p>

                <p>Alright. No, I can't move.</p>

                <p>Alright, let's try this again. Yeah, I'm okay to go to about 415, so 410, 415.</p>

                <p>Dalton McCleery (46:59.982)
                    <br>I'm saying I think I've gotten my grievances of the job market if we want to end that and move
                    on to the Laracon and cloud stuff.
                </p>

                <p>Andy Hinkle (47:11.7)
                    <br>Yeah, for sure. man, where did you end? You said, yeah, no worries dude.
                </p>

                <p>Dalton McCleery (47:14.444)
                    <br>be cognizant of your time. My point was never do any technical job interviews. Just don't.
                    They're not worth it.
                </p>

                <p>Andy Hinkle (47:23.328)
                    <br>Yeah, last thing I'll end it like, yeah, the technical interviews, that's it. Yeah, it's kind of
                    like the getting to know somebody just in talk, like you'll know pretty quickly, usually in the
                    first 15, 30 minutes of like if they're gonna be a good fit, one culturally and then two on the
                    technology side. I will say like, I think I kind of prefer a technical thing. It does show like
                    some.
                </p>

                <p>just some areas of concern between, I thought the New York Times was a really good one. It was just
                    like the fact that was public kind of rubbed me the wrong way. But if you do like in a private repo,
                    that was actually a really good, like was one that took me like three hours to do, like two to three
                    hours. By the way, if you do it, if you get that far, we do a technical interview, pay them, like
                    pay them the person doing it. Especially if it takes more than like three hours or something, but
                    just, but that was a really good one because it's like, it let them know how I.</p>

                <p>Dalton McCleery (48:08.248)
                    <br>For real, what are you doing?
                </p>

                <p>Andy Hinkle (48:17.546)
                    <br>how I construct my controllers, because every developer does it differently. How you construct
                    your controllers, how you do your DTOs, how you do your routes, how you do your tests. And then the
                    technical interview, you can ask questions, like, I see you did this way or, you know. So that part
                    was actually really good, other than, like I said, other than it being public, making sure it's
                    private, just something like that. But yeah, but the biggest thing is just like,
                </p>

                <p>Dalton McCleery (48:26.414)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (48:45.14)
                    <br>Just talk to them. You don't have to, for some of them it's like, well, we wanna do a screen of
                    a technical interview before we even talk. Okay, I can see that you're putting the business first
                    before the people. All right, next. So it's just, you just have to be, just be very picky about who
                    you apply, about where you apply at. And yeah, and to your point of all these tips we gave, make
                    your resume very specific to the job. If you have...
                </p>

                <p>stuff on there, it's not even relevant to the job, just get rid of it, they're not gonna care,
                    they're not gonna read it. yeah. Yeah, man, I've been wanting to talk about this for months, I'm so
                    glad we finally are able to talk about it. But, anything else you wanted to talk about before we
                    move on to some new news?</p>

                <p>Dalton McCleery (49:13.934)
                    <br>Get it off.
                </p>

                <p>Dalton McCleery (49:33.304)
                    <br>Yeah, let's talk about something less depressing and less chaotic. Let's talk about some
                    exciting Laravel stuff.
                </p>

                <p>Andy Hinkle (49:36.288)
                    <br>It's been exciting though. I'm just so thankful. I just want to finally finish with, I've been
                    so thankful for the team that I have and they've been so great to work with. So it's just like so
                    relieving and not that team was so poor before, but it's it's so great to like, just to have all
                    these dreams come true, if you will, of like what you wanted your work day to be like, and this is
                    it. And it's been really good. So yeah.
                </p>

                <p>Dalton McCleery (50:04.92)
                    <br>Yeah, hey, I was on the team before. What are you talking about? Just kidding, I'm just kidding.
                    I'm just kidding. This is the last episode of the podcast. They secretly hate each other. Kidding,
                    kidding. Yeah, no, kudos to you. I'm happy for you.
                </p>

                <p>Andy Hinkle (50:07.232)
                    <br>yeah, about that.
                </p>

                <p>Yeah.</p>

                <p>Andy Hinkle (50:20.896)
                    <br>Yeah, yeah. And I mean, I definitely miss out having you like, it's been, there's been
                    sometimes, you you always have your work bestie and Jake's kind of that for me lately, but it's just
                    kind of like, it's just kind of like, know, if you see something funny in your code or something,
                    you'll take a screenshot. You know, we do that with each other for years. And I do kind of miss that
                    because a lot, some of the things I can't share and then the other things is like, you wouldn't get
                    it, you know? So it just.
                </p>

                <p>Dalton McCleery (50:29.622)
                    <br>I'm coming for you, Jake. He's mine. Well, I found him first.
                </p>

                <p>Andy Hinkle (50:49.78)
                    <br>Like, you know, I do that with Jake sometimes now, but yeah, it's just like, it's been a fun
                    ride and hopefully one day we can, besides our, just our layer of all memes we send to each other,
                    maybe it could be more back to where it was, but yeah, man.
                </p>

                <p>Andy Hinkle (51:04.97)
                    <br>Cool, so, Laravel, US, Denver. you, my gosh.
                </p>

                <p>Dalton McCleery (51:10.446)
                    <br>Yes.
                </p>

                <p>Andy Hinkle (51:14.72)
                    <br>Good gosh, Larrival US in Denver. So did you think it would be Denver?
                </p>

                <p>Dalton McCleery (51:22.056)
                    <br>Were we talking with Robert as well? Yeah, that's what I was going to get to is the whole
                    mountain thing. Yeah, it made sense.
                </p>

                <p>Andy Hinkle (51:22.304)
                    <br>I thought it was gonna be Salt Lake. Yeah, we thought it was gonna be Salt Lake. We saw the
                    mountain, Taylor tweeted the mountain emoji and I was like, ah, Salt Lake City, right? And plus
                    Taylor was just, I don't know if you'd follow Taylor on Instagram. Actually you don't because you
                    don't have an Instagram. I know this because I tried to find it. But I tried to, I followed Taylor
                    on Instagram and he went to Salt Lake, like a Utah Jazz, Salt Lake City basketball game. And so I
                    was like, and then he tweeted the mountain the next week.
                </p>

                <p>Dalton McCleery (51:38.35)
                    <br>I don't
                </p>

                <p>Andy Hinkle (51:52.032)
                    <br>Yeah, it's gonna be in Salt Lake, right? Nope, totally Denver. but I'm totally, I'm really
                    pumped about Denver. It's over in Chris Sev's, you know, where he lives. And so I'll be excited to
                    meet up in his hometown. Last year was Aaron's hometown. So yeah, it'll be really good. I love
                    Denver, dude. I haven't been there 15 years, so I'm really excited. And I'm actually going twice
                    there this summer. I'm going there to see Metallica in June.
                </p>

                <p>Dalton McCleery (52:20.215)
                    <br>lucky.
                </p>

                <p>Andy Hinkle (52:21.448)
                    <br>and then I'm going again a month later, so for Laracon. I'm looking forward to it.
                </p>

                <p>Dalton McCleery (52:27.594)
                    <br>Hey listen, I've been I've vacationed in Denver a few times or once before there's a place
                    called the beer spa if you're there with Lauren Your wife Lauren Do you need to go to this place? It
                    is I don't think they allow kids because it's it's a beer spa, but If you can Even better. Okay, so
                    at this it this is a whole side tangent and I don't I want to go quick Just look up the beer spa
                    That's all I'll say
                </p>

                <p>Andy Hinkle (52:45.376)
                    <br>Kids aren't
                </p>

                <p>Andy Hinkle (52:54.932)
                    <br>your spa.
                </p>

                <p>Dalton McCleery (52:55.886)
                    <br>The the Larikon US venue is like a 15-20 minute walk to the beer spa. I've already like Google
                    Maps did because there's there's a hotel called the Catbird. It's on the street as the same hotel as
                    the Catbird. You just go down the street. Look it up. That's all I'll You'll love that place.
                </p>

                <p>Andy Hinkle (53:01.972)
                    <br>Okay.
                </p>

                <p>It's like... Yes. Okay. Yeah.</p>

                <p>Andy Hinkle (53:12.48)
                    <br>I think that hotel is like the closest hotel to the venue. It's like the venue is kind of out in
                    the neck of the woods. It's like next to a train depot. We're probably gonna be hearing trains all
                    day. That's all right. Maybe we have thunderstorms in Nashville.
                </p>

                <p>Dalton McCleery (53:18.328)
                    <br>Yeah, it's weird. Yeah. Yeah.
                </p>

                <p>That is true, I remember that. It was like a tornado, felt like, outside.</p>

                <p>Andy Hinkle (53:29.376)
                    <br>Yeah, it is. Yeah. But yeah, it's, it'll be a lot of fun. Really looking forward to it. yeah,
                    I'm just trying to figure out all the fun things to do in Denver. It's kind of like off the beaten
                    path of downtown. So we might have to like Uber down to the downtown area, but you might have to
                    show me around because I know you love Denver and you've been, you've been vacationed there a few
                    times. And so we might have to get together and do some of that, but yeah, it'll be a lot of fun.
                </p>

                <p>Dalton McCleery (53:55.014)
                    <br>Beer Spa for sure. Not together. That's a weird thing, but with your wife. That'd be a great
                    afternoon. Yeah, I'm excited for Denver. Denver is an awesome city. For real.
                </p>

                <p>Andy Hinkle (54:00.638)
                    <br>Yeah. Yeah. A bunch of, no. Sweet dude. Yeah. They're open. They have like talk proposals right
                    now and you know, to submit a talk and I hoping to submit not, I won't submit one to laracon this
                    year. I need like a talk under my, under my belt, just like at a random online meetup or something.
                    I don't know. I feel like just going to like the cream of the crop of Laravel talks is just, some
                    people do, but.
                </p>

                <p>Dalton McCleery (54:14.88)
                    <br>Mm-hmm. Mm-hmm.
                </p>

                <p>Dalton McCleery (54:29.602)
                    <br>Yeah, but how much of a baller move would that be?
                </p>

                <p>Andy Hinkle (54:29.694)
                    <br>I'm just like, I don't know, I'm not a public speaker. Like a Jake Bennett basically. he's
                    actually, Jake has been asking me like, did you submit TrillerCon talk yet? And he told me, well,
                    they actually, went on their podcast, they publicly said, him and Michael Dorinda said what their
                    talk is gonna be about, but he told me ahead of time what his is gonna be about, and it's actually a
                    really good one. It's about this idea of the gateway, or sorry, the...
                </p>

                <p>Sorry, I'm trying to think of another word for process. I don't know, but I'll cut this part out. He
                    told me that his talk was about the gateway pattern, and he talked about it on the podcast too, but
                    it's a really cool pattern, but essentially you can create fake gateways. if you did Stripe or
                    something, having it in your ENV Stripe gateway, then it be production or test or fake or something.
                </p>

                <p>And when you're running your app locally, you know, you in your tests, you do all this mocking
                    already, but when you're poking around locally, you might run to an exception or something that
                    because it's trying to use production, whatever. But he says in actually hitting production, it will
                    go to this fake route and just returns like a response. And so it's really cool thing. And so, yeah,
                    I really hope he moves forward with that talk because that'll be a really good one.</p>

                <p>But yeah, so that's one thing he's looking at doing. And then Michael Drenda has a really good talk
                    too on Saloon. And so that's one he proposed of like, Saloon is like an HTTP fake library. And so
                    he's like, not enough people talk about it. Everyone who uses it seems to love it. And he's like,
                    not enough people seem to talk about it or anything. So he proposed to talk on that. But the other
                    speakers that they're on there, yeah, they, those will all be great talks too. And so I feel like
                    this,</p>

                <p>Dalton McCleery (55:57.134)
                    <br>Hmm hmm hmm hmm hmm.
                </p>

                <p>Dalton McCleery (56:09.87)
                    <br>I've heard of that.
                </p>

                <p>Andy Hinkle (56:26.618)
                    <br>this talk proposal process will be highly competitive. It's, not that many people talk and
                    usually everyone who talks is like, you know, they're a world class developer. You've heard about
                    them for many years, so it'll be really good.
                </p>

                <p>Dalton McCleery (56:40.462)
                    <br>Yeah man. Well still, it's gonna be great regardless.
                </p>

                <p>Andy Hinkle (56:42.954)
                    <br>So here's my prediction. I think Laravel Nightwatch will be launched at Laircon, US. Yep.
                </p>

                <p>Dalton McCleery (56:52.322)
                    <br>You think they're going to pull an apple and be like, by the way, it's available now. That would
                    be pretty sick.
                </p>

                <p>Andy Hinkle (56:56.106)
                    <br>Today. You know, they did because Larecon or Laravel Cloud is coming soon. And so they, yeah, I
                    think with the Laravel Cloud announcements coming into this month. So at the end of this month,
                    they'll put that out there. And I feel like then they're going to switch gears to, they're going to
                    keep working on cloud, obviously, but they're going to switch gears to getting
                </p>

                <p>Nightwatch out the door. I feel like once Nightwatch is out there, it'll probably be live by, it'll
                    probably be live at Lercon US. So there'll probably be a majority of the discussion there and what's
                    new with cloud. that's my prediction.</p>

                <p>Dalton McCleery (57:37.966)
                    <br>I agree. kind of want them to have Laracon USB themed around sort of that night watch. Like that
                    night watch stuff. Like just do a dark mode. I think I've said it like four or five times. I love
                    dark mode. If they do like a dark mode Laracon, it's like all night watch themed and sort of
                    whatever. It is really sweet.
                </p>

                <p>Andy Hinkle (57:45.226)
                    <br>Mm-hmm.
                </p>

                <p>Andy Hinkle (57:50.29)
                    <br>yeah, dark mode, yeah
                </p>

                <p>Mmm, yeah. Nightwatch is just such a killer name. All right, so I want to talk about, I want to talk
                    about Laravel Cloud, but speaking of Nightwatches real quick, I feel like developers like me, at
                    least me and I've heard from a few others, are more excited about Nightwatch than Cloud. Cloud makes
                    sense, but it's one of those things that it's kind of, it's been solved in some way, but it's also
                    like the Laravel way of like, hey, go to Laravel Cloud for all your server needs now and stuff. Like
                    go to, DigitalOcean or this or that or, know.</p>

                <p>It's just like, cloud, that's it. Right. But I feel like so many people are just like, they're so
                    excited about using nightwatch because it's going to kind of change their way of monitoring. Some
                    people don't even have it. A majority of our apps don't even have something to that scale besides
                    century of like just catching exceptions. But we don't like, we do all these logs, you know, of
                    like, Hey, if this happened, we need to log it, but we don't really want to throw an exception,
                    right? We never ever look back at those. We're validation errors. Like.</p>

                <p>Dalton McCleery (58:50.606)
                    <br>Right.
                </p>

                <p>Andy Hinkle (58:53.376)
                    <br>Or if somebody hits a validation error 200 times or you know hundreds of times on a page You
                    don't even realize that it's causing your user frustration But like Laravel nightwatch is gonna
                    catch that so really cool But I don't want to get off into I want to talk about cloud before we can
                    able to wrap up But they did the whole thing about like they showed all What's new in cloud and they
                    had a moment. Did you watch the talk at the Larry con Larry con you?
                </p>

                <p>Dalton McCleery (59:18.848)
                    <br>Yes, yes, I did.
                </p>

                <p>Andy Hinkle (59:20.16)
                    <br>They had a moment where Taylor created, I think it was like a database or something and he was
                    trying to create it and it just sat there. Like he hit the button and it's like, why isn't this
                    working? He's like, and then he felt like it a scroll up in name. But I can just imagine all of
                    their, all the people on the back just having a heart attack. Yeah. Yeah, that was good. But anyway,
                    yeah, I thought everything was really good, but it just like.
                </p>

                <p>Dalton McCleery (59:37.432)
                    <br>Out of panic attack.
                </p>

                <p>Andy Hinkle (59:45.856)
                    <br>They did talk about pricing and stuff like that and it just kind of got me wondering if I was
                    actually looking I thought I might save a little bit on the servers that I handle so I probably have
                    about Six or seven different servers between just people have helped on the side. I there's some of
                    them I like I don't even send them the bill for because it's you know, it's just it's not that much
                    but it's just like I don't even know if I my plan was to switch everything to cloud so that way I
                    don't have to
                </p>

                <p>deal with it too much. And there's sometimes where I need to send them like, hey, here's what a
                    preview of this page looks like and Laravel Cloud would be great for that. But more or less, yeah,
                    more or less it's like you're trying to figure out like if I'm going to make the switch or not. And
                    I don't know for somebody like me or somebody like you, if it makes sense to switch our small
                    servers to cloud. Would you agree with that?</p>

                <p>Dalton McCleery (01:00:40.43)
                    <br>Yes and yes. Like it's, I would probably switch just to be on it. That way I don't have to pay
                    for Forge, but it's really hard. I don't think like agencies or big complicated stuff should switch
                    immediately because I don't know. I don't know. It's hard. Yeah. I was really excited for Cloud when
                    it first came out, but like, yeah, I've, I've swapped to the Nightwatch hype train. I'll probably
                    switch my stuff to Cloud just so it's easier.
                </p>

                <p>for me, but it's hard. It's really, it's my, my opinion has changed like 50 % since the announcement.
                </p>

                <p>Andy Hinkle (01:01:19.088)
                    <br>Yeah, I kind of go back and forth on it. if you know, obviously for a business contact, sure,
                    like it makes sense. Especially, you know, if you have a big AWS bill, it's worth checking into. But
                    also they use AWS. So it's like, okay, are we going to save money here? And I understand it's going
                    to your level is going to be bundled up in a level way where it's going to be, where it's going be
                    easier on the resources and stuff like that. So it might be cheap. It probably will be cheaper, but
                    it's just kind of hard for like small businesses or.
                </p>

                <p>something like that, but yeah, man. I'm currently curious, but I am very excited about cloud. I'm
                    just like, I don't have the beta yet. So I think all of that will become at end of this month and we
                    might have a change of heart. I'm like, Hey man, moved all my stuff cloud. We'll see. But yeah, I
                    thought the talk was good.</p>

                <p>Dalton McCleery (01:01:52.994)
                    <br>I don't know.
                </p>

                <p>Dalton McCleery (01:02:05.486)
                    <br>Yeah, the talk was great, Taylor always kills it. I'm gonna switch just to see how it is. So I
                    guess, by the time we record another one of these, we should have some legit opinions. Or at least
                    I'm gonna switch, have some legit opinions.
                </p>

                <p>Andy Hinkle (01:02:20.318)
                    <br>Yeah, yeah, I'm gonna go and try it out and come back. Yeah, for sure. All right, man, you wanna
                    give us a rep? Yep. Yeah, that's probably what the next show would be is like all about cloud and
                    what we think of it. So for sure.
                </p>

                <p>Dalton McCleery (01:02:24.174)
                    <br>Might as well.
                </p>

                <p>Okay, stay tuned for the... I was gonna say, stay tuned for the next one. We'll have some legit
                    opinions.</p>

                <p>Dalton McCleery (01:02:37.614)
                    <br>Yeah, yeah. So stay tuned for that. We're going to talk about cloud. We'll probably talk more
                    about Larikon EU. We got to talk about fusion from Aaron Francis because that man's a beast, native
                    PHP running an iOS. Like, I mean, come on, there's some goodies. Stick around. Stick around. We'll
                    have another great episode next time. You should be there.
                </p>

                <p>Andy Hinkle (01:02:44.244)
                    <br>Yes.
                </p>

                <p>Andy Hinkle (01:02:47.912)
                    <br>Yep. Got a lot of stuff to talk about. Yep.
                </p>

                <p>Dalton McCleery (01:02:56.59)
                    <br>All right, see you guys.
                </p>

                <p>Andy Hinkle (01:02:56.992)
                    <br>Sure. See you. Peace.
                </p>
            </section>
        </div>
</x-app>
