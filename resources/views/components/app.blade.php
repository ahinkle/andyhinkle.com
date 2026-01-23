<!doctype html>
<html lang="en" class="dark">

<head>
    <x-layout.seo-meta>
        {{ $seo }}
    </x-layout.seo-meta>

    <script>
        ! function(t, e) {
            var o, n, p, r;
            e.__SV || (window.posthog && window.posthog.__loaded) || (window.posthog = e, e._i = [], e.init = function(i, s,
                a) {
                function g(t, e) {
                    var o = e.split(".");
                    2 == o.length && (t = t[o[0]], e = o[1]), t[e] = function() {
                        t.push([e].concat(Array.prototype.slice.call(arguments, 0)))
                    }
                }(p = t.createElement("script")).type = "text/javascript", p.crossOrigin = "anonymous", p.async = !
                    0, p.src = s.api_host.replace(".i.posthog.com", "-assets.i.posthog.com") + "/static/array.js", (
                        r = t.getElementsByTagName("script")[0]).parentNode.insertBefore(p, r);
                var u = e;
                for (void 0 !== a ? u = e[a] = [] : a = "posthog", u.people = u.people || [], u.toString = function(
                        t) {
                        var e = "posthog";
                        return "posthog" !== a && (e += "." + a), t || (e += " (stub)"), e
                    }, u.people.toString = function() {
                        return u.toString(1) + ".people (stub)"
                    }, o =
                    "init Xr es pi Zr rs Kr Qr capture Ni calculateEventProperties os register register_once register_for_session unregister unregister_for_session ds getFeatureFlag getFeatureFlagPayload isFeatureEnabled reloadFeatureFlags updateEarlyAccessFeatureEnrollment getEarlyAccessFeatures on onFeatureFlags onSurveysLoaded onSessionId getSurveys getActiveMatchingSurveys renderSurvey displaySurvey cancelPendingSurvey canRenderSurvey canRenderSurveyAsync identify setPersonProperties group resetGroups setPersonPropertiesForFlags resetPersonPropertiesForFlags setGroupPropertiesForFlags resetGroupPropertiesForFlags reset get_distinct_id getGroups get_session_id get_session_replay_url alias set_config startSessionRecording stopSessionRecording sessionRecordingStarted captureException startExceptionAutocapture stopExceptionAutocapture loadToolbar get_property getSessionProperty us ns createPersonProfile hs Vr vs opt_in_capturing opt_out_capturing has_opted_in_capturing has_opted_out_capturing get_explicit_consent_status is_capturing clear_opt_in_out_capturing ss debug O ls getPageViewId captureTraceFeedback captureTraceMetric qr"
                    .split(" "), n = 0; n < o.length; n++) g(u, o[n]);
                e._i.push([i, s, a])
            }, e.__SV = 1)
        }(document, window.posthog || []);
        posthog.init('phc_8BpV2ITwurDV1B3HNf9B90R60HpL45jALFAMkHqS7Si', {
            api_host: 'https://d.andyhinkle.com',
            ui_host: 'https://us.posthog.com',
            defaults: '2025-11-30',
            person_profiles: 'always',
        })
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.ts'])
</head>

<body class="bg-gray-950 text-gray-100 antialiased">
    @env('local')
        <x-dev.dev-toolbar />
    @endenv

    <div class="min-h-screen">
        <div class="mx-auto max-w-3xl px-6 py-12 lg:px-8 lg:py-20">
            <x-layout.header />
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>

    <footer class="border-t border-white/5">
        <div class="mx-auto max-w-3xl px-6 py-12 lg:px-8">
            <p class="text-center text-xs tracking-wide text-gray-600">
                &copy; {{ date('Y') }} Andy Hinkle
            </p>
            @if (Str::contains(Request::url(), 'blog'))
                <p class="mt-3 text-center text-xs text-gray-700">
                    Syntax highlighting by <a href="https://torchlight.dev/" target="_blank" rel="noopener"
                        class="text-gray-600 transition-colors hover:text-gray-400">Torchlight</a>
                </p>
            @endif
        </div>
    </footer>
</body>

</html>
