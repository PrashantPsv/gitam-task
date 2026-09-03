/* ══════════════════════════════════════════════════════════════════
   GITAM — Global scripts (js/script.js)
   Ported from the one-page index.html inline blocks. Every module is a
   self-guarded IIFE: it exits early when its section is not present, so
   this single file runs clean (zero console errors) on all pages.
   Load order (all deferred): jquery.min.js, programme-data.js,
   bootstrap.bundle.min.js, script.js.

     01  SHELL — mobile bottom nav + sheet, page-nav dock, chat FAB,
         contact modal, font resize, mobile drawer, mobile accordion,
         nav scroll shadow, programme mega menu, mega hover
     02  SECTIONS — placements carousel, hostel tabs, changemakers,
         EEE tabs, explore filter, counters, research deck + video,
         reveal-on-scroll, hero/R&I video sizing, faculty rows,
         cinematic video modal, disciplines track, touch-flip cards
   ══════════════════════════════════════════════════════════════════ */

/* ════ 01 SHELL ════ */

/* ── Mobile bottom nav: more sheet + tab bar + active tab observer ── */
document.addEventListener('gitamDataReady', function () {
  /* ── Reliable cross-browser smooth scroll ── */
  function scrollToId(id) {
    var el = document.getElementById(id);
    if (!el) return;
    var top = el.getBoundingClientRect().top + window.pageYOffset - 64;
    window.scrollTo({ top: Math.max(0, top), behavior: "smooth" });
  }

  /* ── More sheet ── */
  var moreBtn = document.getElementById("mob-more-btn");
  var sheet = document.getElementById("mob-sheet");
  var backdrop = document.getElementById("mob-sheet-backdrop");
  var closeBtn = document.getElementById("mob-sheet-close");

  if (!sheet || !backdrop) return;

  function openSheet() {
    var topDrawer = document.getElementById("mobDrawer");
    if (topDrawer && topDrawer.classList.contains("open")) {
      topDrawer.classList.remove("open");
      document.body.classList.remove("mob-drawer-open");
      var ham = document.getElementById("navHamburger");
      if (ham) {
        ham.setAttribute("aria-expanded", "false");
        ham.setAttribute("aria-label", "Open navigation menu");
      }
    }
    syncSheetMaxHeight();
    sheet.classList.add("open");
    backdrop.classList.add("open");
    document.body.style.overflow = "hidden";
  }
  function closeSheet() {
    sheet.classList.remove("open");
    backdrop.classList.remove("open");
    document.body.style.overflow = "";
  }

  function syncSheetMaxHeight() {
    var vh = window.visualViewport
      ? window.visualViewport.height
      : window.innerHeight;
    sheet.style.maxHeight = Math.round(vh) + "px";
  }

  window.addEventListener("resize", syncSheetMaxHeight);
  if (window.visualViewport) {
    window.visualViewport.addEventListener("resize", syncSheetMaxHeight);
  }

  moreBtn && moreBtn.addEventListener("click", openSheet);
  closeBtn && closeBtn.addEventListener("click", closeSheet);
  backdrop && backdrop.addEventListener("click", closeSheet);

  /* ── Cross-page fallback: sections now live on separate pages. When the
        target section is not on this page, navigate to its data-href. ── */
  function goToSection(btn) {
    var id = btn.getAttribute("data-target");
    if (id && document.getElementById(id)) {
      scrollToId(id);
      return true;
    }
    var href = btn.getAttribute("data-href");
    if (href) window.location.href = href;
    return false;
  }

  /* ── Tab bar buttons ── */
  document.querySelectorAll(".mnav-tab[data-target]").forEach(function (btn) {
    btn.addEventListener("click", function () {
      if (!goToSection(btn)) return;
      document.querySelectorAll(".mnav-tab").forEach(function (t) {
        t.classList.remove("active");
      });
      btn.classList.add("active");
    });
  });

  /* ── More sheet items ── */
  document
    .querySelectorAll(".msheet-item[data-target]")
    .forEach(function (btn) {
      btn.addEventListener("click", function () {
        var target = btn.getAttribute("data-target");
        closeSheet();
        if (!(target && document.getElementById(target))) {
          var href = btn.getAttribute("data-href");
          if (href) window.location.href = href;
          return;
        }
        /* wait for sheet to animate away before scrolling */
        setTimeoutdocument.addEventListener('gitamDataReady', function () {
          scrollToId(target);
        }, 300);
      });
    });

  /* ── Auto-highlight active tab while scrolling ── */
  var tabTargets = [
    "sec-stats",
    "sec-explore",
    "sec-placements",
    "sec-contact",
  ];
  var tabObs = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          var id = entry.target.id;
          document
            .querySelectorAll(".mnav-tab[data-target]")
            .forEach(function (t) {
              t.classList.toggle(
                "active",
                t.getAttribute("data-target") === id,
              );
            });
        }
      });
    },
    { rootMargin: "-40% 0px -50% 0px", threshold: 0 },
  );

  tabTargets.forEach(function (id) {
    var el = document.getElementById(id);
    if (el) tabObs.observe(el);
  });
});

document.addEventListener('gitamDataReady', function () {
    var container = document.querySelector('.prog-col-cats'); // Container wrapping your category buttons
    if (!container || !window.CAT_DATA.categories) return;

    var html = '';
    window.CAT_DATA.categories.forEach(function (cat, index) {
      // Add 'active' class to the first button
      var activeClass = index === 0 ? ' active' : '';
      
      html += '<button class="prog-cat-btn' + activeClass + '" data-cat="' + cat.key + '">' + 
                cat.label + ' <span class="prog-arrow">&rarr;</span>' + 
              '</button>';
    });
    html += '<a href="programme-finder" class="prog-finder-cta">Programme Finder &rarr;</a>';
    container.innerHTML = html;
});
/* ── Page-nav floating dock + why-header reveal + chat FAB + testimonials marquee ── */
document.addEventListener('gitamDataReady', function () {
  var nav = document.getElementById("page-nav");
  if (!nav) return;
  var btns = nav.querySelectorAll(".pnav-btn");

  /* ── Reliable cross-browser smooth scroll ── */
  function scrollToId(id) {
    var el = document.getElementById(id);
    if (!el) return;
    var top = el.getBoundingClientRect().top + window.pageYOffset - 64;
    window.scrollTo({ top: Math.max(0, top), behavior: "smooth" });
  }

  /* ── Smooth scroll on click; navigate when the section lives on
        another page (data-href fallback) ── */
  btns.forEach(function (btn) {
    btn.addEventListener("click", function () {
      var id = btn.getAttribute("data-target");
      if (id && document.getElementById(id)) {
        scrollToId(id);
        return;
      }
      var href = btn.getAttribute("data-href");
      if (href) window.location.href = href;
    });
  });

  /* ── Active state via IntersectionObserver ── */
  var sectionIdSet = {};
  Array.from(btns).forEach(function (b) {
    var extra = b.getAttribute("data-active-ids");
    if (extra) {
      extra.split(/\s+/).forEach(function (id) {
        if (id) sectionIdSet[id] = true;
      });
    } else {
      var primary = b.getAttribute("data-target");
      if (primary) sectionIdSet[primary] = true;
    }
  });

  var activeId = null;

  function btnMatchesActive(btn, id) {
    if (!id) return false;
    if (btn.getAttribute("data-target") === id) return true;
    var extra = btn.getAttribute("data-active-ids");
    if (!extra) return false;
    return extra.split(/\s+/).indexOf(id) !== -1;
  }

  var observer = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          activeId = entry.target.id;
          updateActive();
        }
      });
    },
    { rootMargin: "-40% 0px -50% 0px", threshold: 0 },
  );

  Object.keys(sectionIdSet).forEach(function (id) {
    var el = document.getElementById(id);
    if (el) observer.observe(el);
  });

  function updateActive() {
    btns.forEach(function (btn) {
      var isActive = btnMatchesActive(btn, activeId);
      btn.classList.toggle("active", isActive);
      if (isActive) {
        /* keep active pill visible inside the scrollable pills strip (not document scroll) */
        try {
          btn.scrollIntoView({
            behavior: "smooth",
            block: "nearest",
            inline: "nearest",
          });
        } catch (e) {}
      }
    });
  }

  /* ── Show nav once Why GITAM section has been fully scrolled through.
        Pages without that section reveal the dock after a short scroll. ── */
  var whyEl = document.getElementById("sec-stats");

  function updatePnavVisibility() {
    var show;
    if (whyEl) {
      show = whyEl.getBoundingClientRect().bottom <= window.innerHeight;
    } else {
      show = window.pageYOffset > 400;
    }
    nav.classList.toggle("pnav-visible", show);
  }

  window.addEventListener("scroll", updatePnavVisibility, {
    passive: true,
  });
  updatePnavVisibility();
});

/* ── Scroll to top button: visibility + clockwise scroll-progress fill ── */
document.addEventListener('gitamDataReady', function () {
  var btn = document.getElementById("scroll-top-btn");
  if (!btn) return;

  function updateProgress() {
    btn.classList.toggle("is-visible", window.pageYOffset > 400);

    var scrollable =
      document.documentElement.scrollHeight - window.innerHeight;
    var progress = scrollable > 0 ? window.pageYOffset / scrollable : 0;
    progress = Math.max(0, Math.min(1, progress));

    btn.style.setProperty("--stb-progress", progress * 100);
  }

  window.addEventListener("scroll", updateProgress, { passive: true });
  window.addEventListener("resize", updateProgress);
  updateProgress();

  btn.addEventListener("click", function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
});

// ── Why GITAM Header - scroll-driven scale reveal ───────────────────────
document.addEventListener('gitamDataReady', function () {
  var header = document.getElementById("why-header");
  if (!header) return;
  var title = header.querySelector(".why-title");
  var eyebrow = header.querySelector(".why-eyebrow");
  var sub = header.querySelector(".why-sub");
  var glow = header; // ::before pseudo tracks class

  function clamp01(v) {
    return Math.max(0, Math.min(1, v));
  }

  function ease(t) {
    // ease-out cubic for a natural feel
    return 1 - Math.pow(1 - t, 3);
  }

  function update() {
    var rect = header.getBoundingClientRect();
    var vh = window.innerHeight;

    // progress: 0 when header top hits bottom of screen,
    //           1 when header top reaches 20% from top of viewport
    var raw = 1 - (rect.top - vh * 0.2) / (vh - vh * 0.2);
    var p = clamp01(raw);

    // title: scale 0.15 → 1, opacity 0 → 1
    if (title) {
      var s = 0.15 + ease(p) * 0.85;
      title.style.transform = "scale(" + s + ")";
      title.style.opacity = clamp01(p * 1.8);
    }

    // eyebrow: fades in from p = 0.25
    if (eyebrow) {
      var ep = clamp01((p - 0.25) / 0.5);
      eyebrow.style.opacity = ep;
      eyebrow.style.transform = "translateY(" + 8 * (1 - ep) + "px)";
    }

    // sub: fades in from p = 0.55
    if (sub) {
      var sp = clamp01((p - 0.55) / 0.45);
      sub.style.color = "rgba(255,255,255," + 0.55 * sp + ")";
    }

    // glow spotlight behind title
    if (p > 0.1) header.classList.add("revealed");
  }

  window.addEventListener("scroll", update, { passive: true });
  update();
});

// Chat FAB toggle
document.addEventListener('gitamDataReady', function () {
  var fab = document.getElementById("chat-fab");
  var trigger = document.getElementById("cfabTrigger");
  if (!trigger || !fab) return;
  function openFab() {
    fab.classList.add("open");
    trigger.setAttribute("aria-expanded", "true");
  }
  trigger.addEventListener("click", function () {
    var open = fab.classList.toggle("open");
    trigger.setAttribute("aria-expanded", open ? "true" : "false");
  });
  document.addEventListener("click", function (e) {
    if (!fab.contains(e.target)) {
      fab.classList.remove("open");
      trigger.setAttribute("aria-expanded", "false");
    }
  });
  var heroChat = document.getElementById("heroChatBtn");
  if (heroChat) {
    heroChat.addEventListener("click", function (e) {
      e.stopPropagation();
      window.open(
        "https://www.gitam.edu/chat-with-a-student-ambassador",
        "_blank",
        "noopener",
      );
    });
  }
  var testimonialsChat = document.getElementById("testimonialsChatBtn");
  if (testimonialsChat) {
    testimonialsChat.addEventListener("click", function (e) {
      e.stopPropagation();
      window.open(
        "https://www.gitam.edu/chat-with-a-student-ambassador",
        "_blank",
        "noopener",
      );
    });
  }
});

// Rotate student ambassador photos in Chat FAB
document.addEventListener('gitamDataReady', function () {
  var stack = document.querySelector(".cfab-student-stack");
  if (!stack) return;
  var photos = stack.querySelectorAll(".cfab-student-photo");
  if (photos.length < 2) return;
  if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) return;
  var active = 0;
  setIntervaldocument.addEventListener('gitamDataReady', function () {
    photos[active].classList.remove("is-active");
    active = (active + 1) % photos.length;
    photos[active].classList.add("is-active");
  }, 1000);
});

// Student experiences marquee - duplicate each track for a seamless vertical loop
document.addEventListener('gitamDataReady', function () {
  var tracks = document.querySelectorAll(".tm-track");
  tracks.forEach(function (track) {
    var originals = Array.prototype.slice.call(track.children);
    originals.forEach(function (node) {
      var clone = node.cloneNode(true);
      clone.setAttribute("aria-hidden", "true");
      track.appendChild(clone);
    });
  });
});

/* ── Contact modal, font resize, research deck & video, mobile drawer,
      mobile accordion, nav scroll shadow, programme mega, mega hover ── */
// ── Contact modal ────────────────────────────────────
document.addEventListener('gitamDataReady', function () {
  var backdrop = document.getElementById("contactModal");
  var form = document.getElementById("cmodalForm");
  var successEl = document.getElementById("cmodalSuccess");
  if (!backdrop || !form || !successEl) return;

  function openModal() {
    backdrop.classList.add("open");
    document.body.style.overflow = "hidden";
  }
  function closeModal() {
    backdrop.classList.remove("open");
    document.body.style.overflow = "";
    setTimeoutdocument.addEventListener('gitamDataReady', function () {
      form.style.display = "";
      successEl.style.display = "none";
      form.reset && form.reset();
    }, 300);
  }

  var triggers = document.querySelectorAll(".cmodal-open-trigger");
  triggers.forEach(function (el) {
    el.addEventListener("click", openModal);
  });

  backdrop.addEventListener("click", function (e) {
    if (e.target === backdrop) closeModal();
  });
  document.getElementById("cmodalClose").addEventListener("click", closeModal);
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") closeModal();
  });

  form.addEventListener("submit", function (e) {
    e.preventDefault();
    form.style.display = "none";
    successEl.style.display = "block";
    setTimeout(closeModal, 3200);
  });
});

// ── Font resize (top bar, nav, page content, footer) ──
document.addEventListener('gitamDataReady', function () {
  var buttons = document.querySelectorAll("[data-font-action]");
  if (!buttons.length) return;
  var base = 16;
  var current = base;
  var targets = [
    document.querySelector(".aicte-bar"),
    document.querySelector(".nav-links"),
    document.querySelector(".login-dropdown"),
    document.querySelector(".mob-drawer-menu"),
    document.getElementById("mob-nav"),
    document.getElementById("mob-sheet"),
    document.getElementById("page-nav"),
    document.getElementById("main-content"),
    document.querySelector(".site-footer"),
  ]
    .concat(
      Array.prototype.slice.call(
        document.querySelectorAll(".mega, .nav-apply, .nav-enquire, .nav-login"),
      ),
    )
    .filter(Boolean);

  function apply(size) {
    current = Math.min(22, Math.max(12, size));
    var scale = current / base;
    targets.forEach(function (el) {
      el.style.fontSize = current + "px";
      el.style.zoom = String(scale);
    });
  }

  function reset() {
    targets.forEach(function (el) {
      el.style.fontSize = "";
      el.style.zoom = "";
    });
    current = base;
  }

  buttons.forEach(function (btn) {
    btn.addEventListener("click", function (e) {
      e.preventDefault();
      e.stopPropagation();
      var action = btn.getAttribute("data-font-action");
      if (action === "increase") apply(current + 2);
      else if (action === "decrease") apply(current - 2);
      else if (action === "reset") reset();
    });
  });
});

// ── Research & Innovation — fullscreen scroll-pinned slide deck ──
document.addEventListener('gitamDataReady', function () {
  var section = document.getElementById("sec-research");
  if (!section) return;
  var track = section.querySelector(".rxd-track");
  var stage = section.querySelector(".rxd-stage");
  var slides = Array.prototype.slice.call(
    section.querySelectorAll(".rxd-slide"),
  );
  var dots = Array.prototype.slice.call(
    section.querySelectorAll(".rxd-rail-dot"),
  );
  var counterCur = section.querySelector(".rxd-counter-cur");
  if (!track || !stage || !slides.length) return;

  var N = slides.length;
  track.style.setProperty("--rxd-slides", N);

  var reduce = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  // animated count-up (runs once per element)
  function countUp(el) {
    if (el.dataset.counted) return;
    el.dataset.counted = "1";
    var target = parseInt(el.getAttribute("data-count"), 10);
    if (isNaN(target)) return;
    var suffix = el.getAttribute("data-suffix") || "";
    var startT = null,
      dur = 1400;
    function step(ts) {
      if (startT === null) startT = ts;
      var p = Math.min((ts - startT) / dur, 1);
      var eased = 1 - Math.pow(1 - p, 3);
      el.textContent = Math.round(target * eased).toLocaleString("en-IN");
      if (suffix) {
        var u = document.createElement("span");
        u.className = "rx-unit";
        u.textContent = suffix;
        el.appendChild(u);
      }
      if (p < 1) requestAnimationFrame(step);
    }
    requestAnimationFrame(step);
  }
  function countSlide(slide) {
    var nums = slide.querySelectorAll(".rx-stat-num[data-count]");
    Array.prototype.forEach.call(nums, countUp);
  }

  // ── Fallback: reduced motion / no IntersectionObserver ──
  //    Render every slide stacked; count up as each scrolls in.
  if (reduce || !("IntersectionObserver" in window)) {
    slides.forEach(function (s) {
      s.classList.add("is-active");
    });
    if ("IntersectionObserver" in window) {
      var fio = new IntersectionObserver(
        function (entries) {
          entries.forEach(function (e) {
            if (e.isIntersecting) {
              countSlide(e.target);
              fio.unobserve(e.target);
            }
          });
        },
        { threshold: 0.25 },
      );
      slides.forEach(function (s) {
        fio.observe(s);
      });
    } else {
      slides.forEach(countSlide);
    }
    return;
  }

  // ── Deck mode ──
  section.classList.add("rxd-on");

  var current = -1;
  function setActive(idx) {
    idx = Math.max(0, Math.min(N - 1, idx));
    if (idx === current) return;
    current = idx;
    slides.forEach(function (s, i) {
      s.classList.toggle("is-active", i === idx);
      s.classList.toggle("is-past", i < idx);
      s.setAttribute("aria-hidden", i === idx ? "false" : "true");
    });
    dots.forEach(function (d, i) {
      d.classList.toggle("is-active", i === idx);
      if (i === idx) d.setAttribute("aria-current", "true");
      else d.removeAttribute("aria-current");
    });
    stage.setAttribute("data-active", String(idx));
    if (counterCur)
      counterCur.textContent = (idx + 1 < 10 ? "0" : "") + (idx + 1);
    countSlide(slides[idx]);
  }

  var ticking = false;
  function update() {
    ticking = false;
    var rect = track.getBoundingClientRect();
    var dist = rect.height - window.innerHeight;
    var progress = dist > 0 ? -rect.top / dist : 0;
    progress = Math.max(0, Math.min(1, progress));
    var idx = Math.floor(progress * N);
    if (idx >= N) idx = N - 1;
    setActive(idx);
  }
  function onScroll() {
    if (!ticking) {
      ticking = true;
      requestAnimationFrame(update);
    }
  }
  window.addEventListener("scroll", onScroll, { passive: true });
  window.addEventListener("resize", onScroll, { passive: true });

  // rail dots jump to the centre of their slide's scroll segment
  dots.forEach(function (dot, i) {
    dot.addEventListener("click", function () {
      var rect = track.getBoundingClientRect();
      var trackTop = rect.top + window.pageYOffset;
      var dist = track.offsetHeight - window.innerHeight;
      var targetY = trackTop + ((i + 0.5) / N) * dist;
      window.scrollTo({ top: targetY, behavior: "smooth" });
    });
  });

  setActive(0);
  update();
});

// ── Research hero video: click / button → full screen ──
document.addEventListener('gitamDataReady', function () {
  var hero = document.querySelector("#sec-research .rx-hero");
  if (!hero) return;
  var video = hero.querySelector(".rx-hero-video");
  var btn = hero.querySelector(".rx-hero-fs");
  if (!video) return;

  function fsElement() {
    return document.fullscreenElement || document.webkitFullscreenElement;
  }
  function enterFs() {
    // iOS Safari only supports fullscreen on the <video> itself
    if (video.requestFullscreen) video.requestFullscreen();
    else if (video.webkitRequestFullscreen) video.webkitRequestFullscreen();
    else if (video.webkitEnterFullscreen) {
      video.webkitEnterFullscreen();
    }
    video.muted = false;
    video.controls = true;
  }
  function restore() {
    video.controls = false;
    video.muted = true;
    var p = video.play();
    if (p && p.catch) p.catchdocument.addEventListener('gitamDataReady', function () {});
  }

  video.addEventListener("click", enterFs);
  if (btn) btn.addEventListener("click", enterFs);

  document.addEventListener("fullscreenchange", function () {
    if (!fsElement()) restore();
  });
  document.addEventListener("webkitfullscreenchange", function () {
    if (!fsElement()) restore();
  });
  // iOS native player exit
  video.addEventListener("webkitendfullscreen", restore);
});

// ── Mobile drawer ────────────────────────────────────
document.addEventListener('gitamDataReady', function () {
  var hamburger = document.getElementById("navHamburger");
  var drawer = document.getElementById("mobDrawer");
  var bg = document.getElementById("drawerBg");
  if (!hamburger || !drawer || !bg) return;
  function setDrawerOpen(open) {
    drawer.classList.toggle("open", open);
    document.body.classList.toggle("mob-drawer-open", open);
    hamburger.setAttribute("aria-expanded", open ? "true" : "false");
    hamburger.setAttribute(
      "aria-label",
      open ? "Close navigation menu" : "Open navigation menu",
    );
    document.body.style.overflow = open ? "hidden" : "";
    if (open) {
      var scrollEl = drawer.querySelector(".mob-drawer-scroll");
      if (scrollEl) scrollEl.scrollTop = 0;
      var sheet = document.getElementById("mob-sheet");
      var sheetBg = document.getElementById("mob-sheet-backdrop");
      if (sheet) sheet.classList.remove("open");
      if (sheetBg) sheetBg.classList.remove("open");
      window.dispatchEvent(new Event("resize"));
    }
  }
  function closeDrawer() {
    setDrawerOpen(false);
  }
  hamburger.addEventListener("click", function () {
    setDrawerOpen(!drawer.classList.contains("open"));
  });
  bg.addEventListener("click", closeDrawer);
  drawer.querySelectorAll("a").forEach(function (a) {
    a.addEventListener("click", closeDrawer);
  });
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") closeDrawer();
  });
});

// ── Mobile accordion toggle (supports nested accordions) ──
// Open/close animate as a height transition (~260ms, matching the CSS). The
// panel's real content height is measured and set inline so the slide runs to
// the actual height regardless of how many links a section has.
document.addEventListener('gitamDataReady', function () {
  // Direct-child sub-panel of an accordion item (a link list or the
  // compliance grid) — not a panel belonging to a nested accordion.
  function subsOf(item) {
    for (var i = 0; i < item.children.length; i++) {
      var c = item.children[i];
      if (
        c.classList &&
        (c.classList.contains("mob-acc-subs") ||
          c.classList.contains("mob-compliance-grid"))
      ) {
        return c;
      }
    }
    return null;
  }
  function expand(item) {
    if (item.classList.contains("open")) return;
    item.classList.add("open");
    var subs = subsOf(item);
    if (!subs) return;
    subs.style.height = "auto";
    var target = subs.scrollHeight;
    subs.style.height = "0px";
    void subs.offsetHeight; // force reflow so the transition runs from 0
    subs.style.height = target + "px";
    subs.addEventListener("transitionend", function done(e) {
      if (e.target !== subs || e.propertyName !== "height") return;
      subs.removeEventListener("transitionend", done);
      // Release to auto so a nested section opening later can grow this panel.
      if (item.classList.contains("open")) subs.style.height = "auto";
    });
  }
  function collapse(item) {
    if (!item.classList.contains("open")) return;
    var subs = subsOf(item);
    // Snap any open descendants shut — they're clipped as this panel closes.
    item.querySelectorAll("[data-acc].open").forEach(function (n) {
      n.classList.remove("open");
      var s = subsOf(n);
      if (s) s.style.height = "0px";
    });
    item.classList.remove("open");
    if (!subs) return;
    subs.style.height = subs.scrollHeight + "px";
    void subs.offsetHeight; // force reflow so the transition runs from a fixed height
    subs.style.height = "0px";
  }
  document.querySelectorAll("[data-acc-toggle]").forEach(function (btn) {
    btn.addEventListener("click", function (e) {
      e.preventDefault();
      var item = btn.closest("[data-acc]");
      var wasOpen = item.classList.contains("open");
      // Close only siblings at the same level (keep ancestors open).
      var parent = item.parentNode;
      Array.prototype.forEach.call(parent.children, function (sib) {
        if (
          sib !== item &&
          sib.nodeType === 1 &&
          sib.hasAttribute("data-acc") &&
          sib.classList.contains("open")
        ) {
          collapse(sib);
        }
      });
      if (wasOpen) collapse(item);
      else expand(item);
    });
  });
});

// ── Main nav scroll shadow + mega menu positioning ──
document.addEventListener('gitamDataReady', function () {
  var nav = document.getElementById("mainNav");
  if (!nav) return;
  function updateNav() {
    nav.classList.toggle("scrolled", window.scrollY > 10);
    var headerBottom = nav.getBoundingClientRect().bottom;
    document.documentElement.style.setProperty(
      "--mega-top",
      headerBottom + "px",
    );
  }
  window.addEventListener("scroll", updateNav, { passive: true });
  window.addEventListener("resize", updateNav, { passive: true });
  updateNav();
});

// ── 3-column programme mega menu logic ──
document.addEventListener('gitamDataReady', function () {
  var DATA = window.GITAM_DATA;
  if (!DATA) return;

  // PhD data (not in programme-data.js, sourced from refactor/navbar branch)
  var PHD_DATA = {
    "Engineering & Technology": {
      icon: "⚙️",
      programs: {
        "Ph.D. Computer Science & Engineering": { dur: "3-5 Years" },
        "Ph.D. Electronics & Communication": { dur: "3-5 Years" },
        "Ph.D. Mechanical Engineering": { dur: "3-5 Years" },
        "Ph.D. Civil Engineering": { dur: "3-5 Years" },
        "Ph.D. Electrical Engineering": { dur: "3-5 Years" },
      },
    },
    Science: {
      icon: "🔬",
      programs: {
        "Ph.D. Chemistry": { dur: "3-5 Years" },
        "Ph.D. Physics": { dur: "3-5 Years" },
        "Ph.D. Mathematics": { dur: "3-5 Years" },
        "Ph.D. Biotechnology": { dur: "3-5 Years" },
      },
    },
    Management: {
      icon: "📊",
      programs: {
        "Ph.D. Management": { dur: "3-5 Years" },
        "Ph.D. Commerce": { dur: "3-5 Years" },
      },
    },
    Pharmacy: {
      icon: "💊",
      programs: {
        "Ph.D. Pharmacy": { dur: "3-5 Years" },
        "Ph.D. Pharmaceutical Sciences": { dur: "3-5 Years" },
      },
    },
    Law: {
      icon: "⚖️",
      programs: {
        "Ph.D. Law": { dur: "3-5 Years" },
      },
    },
    "Humanities & Social Sciences": {
      icon: "📚",
      programs: {
        "Ph.D. English": { dur: "3-5 Years" },
        "Ph.D. Economics": { dur: "3-5 Years" },
        "Ph.D. Political Science": { dur: "3-5 Years" },
      },
    },
  };

  var catMap = { ug: DATA.ug, pg: DATA.pg, phd: DATA.phd };

  // Discipline name -> programme-finder facet ID
  var DISC_ID = {
    "Engineering & Technology": 259,
    Architecture: 17,
    Management: 18,
    "Humanities & Social Sciences": 19,
    Law: 21,
    Nursing: 23,
    Pharmacy: 25,
    Science: 28,
  };
  var CS_RE =
    /comput|artificial intelligence|\bai\b|\bml\b|data science|information tech|software|machine learning|cyber/i;

  function getDiscId(discKey, progName) {
    if (discKey === "Engineering & Technology") {
      return CS_RE.test(progName) ? 20 : 259;
    }
    return DISC_ID[discKey] || null;
  }

  function buildCourseUrl(catKey, discKey, progName) {
    var discId = getDiscId(discKey, progName);
    var params = [];
    params.push("field_course_level_value_selective=" + catKey);
    if (discId) params.push("field_discipline_target_id_selective=" + discId);
    /* preselect the course itself via the finder's search filter
       (finder has no PhD data, so phd links stay discipline-only) */
    if (catKey !== "phd") params.push("q=" + encodeURIComponent(progName));
    return "programme-finder?" + params.join("&");
  }

  var discListEl = document.getElementById("progDiscList");
  var courseListEl = document.getElementById("progCourseList");
  if (!discListEl || !courseListEl) return;
  var catBtns = document.querySelectorAll(".prog-cat-btn[data-cat]");
  var activeCat = "ug";
  var activeDisc = null;

  /* Finder URL for the current category + discipline selection (no course).
     The finder has no PhD data, so phd omits the level param. */
  function currentFinderUrl() {
    var params = [];
    if (activeCat !== "phd") {
      params.push("field_course_level_value_selective=" + activeCat);
    }
    var id = activeDisc ? getDiscId(activeDisc, "") : null;
    if (id) params.push("field_discipline_target_id_selective=" + id);
    return (
      "programme-finder" + (params.length ? "?" + params.join("&") : "")
    );
  }
  var finderCta = document.querySelector("#progMega .prog-finder-cta");
  function updateFinderCta() {
    if (finderCta) finderCta.setAttribute("href", currentFinderUrl());
  }

  function renderDiscs(catKey) {
    var disciplines = catMap[catKey];
    if (!disciplines) {
      discListEl.innerHTML =
        '<li class="prog-empty">No disciplines available</li>';
      return;
    }
    var html = "";
    var keys = Object.keys(disciplines);
    keys.forEach(function (disc, i) {
      html +=
        '<li><button class="prog-disc-btn' +
        (i === 0 ? " active" : "") +
        '" data-disc="' +
        disc.replace(/"/g, "&quot;") +
        '">' +
        disc +
        "</button></li>";
    });
    discListEl.innerHTML = html;
    // Auto-select first discipline
    if (keys.length > 0) {
      activeDisc = keys[0];
      renderCourses(catKey, keys[0]);
    }
    // Bind disc buttons
    discListEl.querySelectorAll(".prog-disc-btn").forEach(function (btn) {
      btn.addEventListener("mouseenter", function () {
        discListEl.querySelectorAll(".prog-disc-btn").forEach(function (b) {
          b.classList.remove("active");
        });
        btn.classList.add("active");
        activeDisc = btn.getAttribute("data-disc");
        renderCourses(activeCat, activeDisc);
      });
      // Clicking a discipline opens the finder with it preselected
      btn.addEventListener("click", function () {
        activeDisc = btn.getAttribute("data-disc");
        window.location.href = currentFinderUrl();
      });
    });
    updateFinderCta();
  }

  function renderCourses(catKey, discKey) {
    updateFinderCta();
    var disciplines = catMap[catKey];
    if (!disciplines || !disciplines[discKey]) {
      courseListEl.innerHTML =
        '<li class="prog-empty">No programmes found</li>';
      return;
    }
    var programs = disciplines[discKey].programs;
    var progKeys = Object.keys(programs);
    if (progKeys.length === 0) {
      courseListEl.innerHTML =
        '<li class="prog-empty">No programmes found</li>';
      return;
    }
    courseListEl.innerHTML = "";
    for (var i = 0; i < progKeys.length; i++) {
      var name = progKeys[i];
      var p = programs[name];
      var dur = p.dur || "";
      var href = buildCourseUrl(catKey, discKey, name);
      var li = document.createElement("li");
      var a = document.createElement("a");
      a.setAttribute("class", "prog-course-link");
      a.setAttribute("href", href);
      a.appendChild(document.createTextNode(name));
      if (dur) {
        a.appendChild(document.createTextNode(" "));
        var span = document.createElement("span");
        span.setAttribute("class", "prog-course-dur");
        span.appendChild(document.createTextNode(dur));
        a.appendChild(span);
      }
      li.appendChild(a);
      courseListEl.appendChild(li);
    }
  }

  // Bind category buttons
  catBtns.forEach(function (btn) {
    btn.addEventListener("mouseenter", function () {
      catBtns.forEach(function (b) {
        b.classList.remove("active");
      });
      btn.classList.add("active");
      activeCat = btn.getAttribute("data-cat");
      renderDiscs(activeCat);
    });
  });

  // Initialize with UG
  renderDiscs("ug");

  // Re-init when mega opens (to reset state)
  var progMegaParent = document.getElementById("progMega");
  if (progMegaParent) {
    var navItem = progMegaParent.closest(".has-mega");
    if (navItem) {
      var observer = new MutationObserver(function (mutations) {
        mutations.forEach(function (m) {
          if (m.target.classList.contains("mega-open")) {
            activeCat = "ug";
            catBtns.forEach(function (b) {
              b.classList.remove("active");
            });
            if (catBtns[0]) catBtns[0].classList.add("active");
            renderDiscs("ug");
          }
        });
      });
      observer.observe(navItem, {
        attributes: true,
        attributeFilter: ["class"],
      });
    }
  }
});

// ── Mega menu: CLICK to open (CMU-style). Hover only underlines. ──
//   Clicking a top-level item plays the brand-banner morph + staged
//   drawer reveal (driven by the .mega-is-open class on the nav) and
//   opens that item's mega. Clicking it again, clicking another item,
//   clicking outside, or pressing Escape closes it.
document.addEventListener('gitamDataReady', function () {
  var nav = document.getElementById("mainNav");
  if (!nav) return;
  // Only real mega items (login uses .login-dropdown instead of .mega).
  var items = Array.prototype.slice.call(
    document.querySelectorAll(".has-mega"),
  );

  function syncNav() {
    var open = document.querySelector(".has-mega.mega-open");
    var hasMegaDrawer = open && open.querySelector(".mega");
    nav.classList.toggle("mega-is-open", !!hasMegaDrawer);
  }

  function closeAll(except) {
    items.forEach(function (i) {
      if (i === except) return;
      i.classList.remove("mega-open");
      var t = i.querySelector(
        ":scope > .nav-toggle, :scope > button.nav-toggle",
      );
      if (t) t.setAttribute("aria-expanded", "false");
    });
  }

  function closeEverything() {
    closeAll(null);
    syncNav();
  }

  items.forEach(function (item) {
    var panel =
      item.querySelector(".mega") || item.querySelector(".login-dropdown");
    var toggle = item.querySelector(
      ":scope > .nav-toggle, :scope > button.nav-toggle",
    );
    if (!panel || !toggle) return;

    toggle.addEventListener("click", function (e) {
      e.preventDefault();
      e.stopPropagation();
      var isOpen = item.classList.contains("mega-open");
      closeAll(item);
      if (isOpen) {
        item.classList.remove("mega-open");
        toggle.setAttribute("aria-expanded", "false");
      } else {
        item.classList.add("mega-open");
        toggle.setAttribute("aria-expanded", "true");
      }
      syncNav();
    });
  });

  // Click anywhere outside a mega item closes the open drawer.
  document.addEventListener("click", function (e) {
    if (!e.target.closest(".has-mega")) closeEverything();
  });

  // Escape closes and returns focus to the active toggle.
  document.addEventListener("keydown", function (e) {
    if (e.key !== "Escape") return;
    var open = document.querySelector(".has-mega.mega-open");
    closeEverything();
    if (open) {
      var t = open.querySelector(
        ":scope > .nav-toggle, :scope > button.nav-toggle",
      );
      if (t) t.focus();
    }
  });
})

/* ── Top-nav scrollspy DISABLED ──────────────────────────────────
      Previously moved aria-current="page" between top-nav items as their
      section scrolled into view, which made the active underline bar hop
      around during scroll. Removed per design — the top nav now only shows
      the underline on hover (and, on multi-page routes, the static
      current-page item set in the markup). ── */

/* ════ 02 SECTIONS ════ */

/* ── Placements: recruiters strip move, card carousel; hostel tabs;
      changemakers carousel; Explore-Engage-Enjoy tabs ── */
// Move recruiters strip to below the carousel controls
document.addEventListener('gitamDataReady', function () {
  const recruiters = document.querySelector(".recruiters-section");
  const controls = document.querySelector(".placements-controls");
  if (recruiters && controls && controls.parentNode) {
    controls.parentNode.insertBefore(recruiters, controls.nextSibling);
  }
});

document.addEventListener('gitamDataReady', function () {
  const track = document.getElementById("placementsTrack");
  const stage = document.getElementById("placementsStage");
  if (!track || !stage) return;
  const cards = Array.from(track.querySelectorAll(".pl-card"));
  const dotsContainer = document.getElementById("placementDots");
  if (!dotsContainer) return;
  const arrows = document.querySelectorAll(".pl-arr");
  const total = cards.length;
  let active = 4;
  let timer;

  cards.forEach((_, i) => {
    const dot = document.createElement("div");
    dot.className = "pl-dot";
    dot.addEventListener("click", () => setActive(i));
    dotsContainer.appendChild(dot);
  });
  const dots = Array.from(dotsContainer.children);

  const mobileMq = window.matchMedia("(max-width: 600px)");

  function update() {
    const isMobile = mobileMq.matches;
    cards.forEach((card, i) => {
      let offset = i - active;
      if (offset > total / 2) offset -= total;
      if (offset < -total / 2) offset += total;
      const abs = Math.abs(offset);

      if (isMobile) {
        const isCurrent = abs === 0;
        card.style.transform = "translateX(0) scale(1)";
        card.style.opacity = isCurrent ? "1" : "0";
        card.style.visibility = isCurrent ? "visible" : "hidden";
        card.style.filter = "none";
        card.style.zIndex = isCurrent ? "10" : "1";
        card.style.pointerEvents = isCurrent ? "auto" : "none";
        card.classList.toggle("is-active", isCurrent);
        return;
      }

      const direction = offset < 0 ? -1 : 1;
      let scale, opacity, brightness, x, z, rotateY;
      card.style.visibility = "visible";
      if (abs === 0) {
        scale = 1.18;
        opacity = 1;
        brightness = 1;
        x = 0;
        z = 10;
        rotateY = 0;
      } else if (abs === 1) {
        scale = 0.82;
        opacity = 0.82;
        brightness = 0.68;
        x = direction * 335;
        z = 7;
        rotateY = offset * -5;
      } else if (abs === 2) {
        scale = 0.64;
        opacity = 0.52;
        brightness = 0.48;
        x = direction * 590;
        z = 4;
        rotateY = offset * -6;
      } else {
        scale = 0.5;
        opacity = 0;
        brightness = 0.3;
        x = direction * 800;
        z = 1;
        rotateY = 0;
      }
      card.style.transform =
        "translateX(" +
        x +
        "px) scale(" +
        scale +
        ") rotateY(" +
        rotateY +
        "deg)";
      card.style.opacity = opacity;
      card.style.filter = "brightness(" + brightness + ")";
      card.style.zIndex = z;
      card.style.pointerEvents = abs > 2 ? "none" : "auto";
      card.classList.toggle("is-active", abs === 0);
    });
    dots.forEach((d, i) => d.classList.toggle("active", i === active));
  }

  function setActive(i) {
    active = ((i % total) + total) % total;
    update();
    restart();
  }

  function restart() {
    clearInterval(timer);
    timer = setInterval(() => setActive(active + 1), 2000);
  }

  cards.forEach((card, i) =>
    card.addEventListener("click", () => setActive(i)),
  );
  arrows.forEach((arr) =>
    arr.addEventListener("click", () =>
      setActive(active + parseInt(arr.dataset.dir, 10)),
    ),
  );
  stage.addEventListener("mouseenter", () => clearInterval(timer));
  stage.addEventListener("mouseleave", restart);
  mobileMq.addEventListener("change", update);

  update();
  restart();
});

// ── Hostel tabs ──────────────────────────────────
document.addEventListener('gitamDataReady', function () {
  const tabs = document.querySelectorAll(".ht-tab");
  const panels = document.querySelectorAll(".ht-panel");
  tabs.forEach((tab) => {
    tab.addEventListener("click", () => {
      tabs.forEach((t) => t.classList.remove("ht-active"));
      panels.forEach((p) => p.classList.remove("ht-panel-active"));
      tab.classList.add("ht-active");
      const target = document.getElementById("ht-panel-" + tab.dataset.tab);
      if (target) target.classList.add("ht-panel-active");
    });
  });

  window.activateCampusTab = function (tabId) {
    const tab = document.querySelector(".ht-tab[data-tab='" + tabId + "']");
    if (tab) tab.click();
  };
});

// ── Campuses mega: hover a campus → show its schools ──
document.addEventListener('gitamDataReady', function () {
  document.querySelectorAll(".cmega").forEach(function (cmega) {
    var campuses = cmega.querySelectorAll(".cmega-campus");
    var panels = cmega.querySelectorAll(".cmega-panel");
    function activate(key) {
      campuses.forEach(function (c) {
        c.classList.toggle("cmega-active", c.dataset.campus === key);
      });
      panels.forEach(function (p) {
        p.classList.toggle("cmega-active", p.dataset.campus === key);
      });
    }
    campuses.forEach(function (c) {
      c.addEventListener("mouseenter", function () {
        activate(c.dataset.campus);
      });
      c.addEventListener("focus", function () {
        activate(c.dataset.campus);
      });
    });
  });
});

// ── Changemakers click carousel (no scroll-jacking) ──
document.addEventListener('gitamDataReady', function () {
  const section = document.getElementById("changemakersSection");
  if (!section) return;
  const cards = Array.from(section.querySelectorAll(".cm-card"));
  const dots = Array.from(section.querySelectorAll(".cm-dot"));
  const counter = document.getElementById("cmCounter");
  const prevBtn = document.getElementById("cmPrev");
  const nextBtn = document.getElementById("cmNext");
  const navLabel = document.getElementById("cmNavLabel");
  const progressFill = document.getElementById("cmProgressFill");
  const total = cards.length;
  let current = 0;
  let autoTimer = null;

  if (window.matchMedia("(max-width: 600px)").matches) {
    cards.forEach((c) => {
      c.style.opacity = 1;
      c.style.transform = "none";
    });
    return;
  }

  function show(idx, direction) {
    if (idx === current && direction !== undefined) return;
    cards.forEach((c, i) => {
      c.classList.remove("cm-active", "cm-past");
      if (i === idx) c.classList.add("cm-active");
      else if (i < idx) c.classList.add("cm-past");
    });
    dots.forEach((d, i) => d.classList.toggle("cm-dot-active", i === idx));
    if (counter) counter.textContent = idx + 1 + " / " + total;
    if (progressFill)
      progressFill.style.width = ((idx + 1) / total) * 100 + "%";
    current = idx;
  }

  function next() {
    show((current + 1) % total);
  }
  function prev() {
    show((current - 1 + total) % total);
  }

  function startAuto() {
    clearInterval(autoTimer);
    autoTimer = setInterval(next, 5000);
  }
  function resetAuto() {
    startAuto();
  }

  if (prevBtn)
    prevBtn.addEventListener("click", () => {
      prev();
      resetAuto();
      if (navLabel) navLabel.style.opacity = "0";
    });
  if (nextBtn)
    nextBtn.addEventListener("click", () => {
      next();
      resetAuto();
      if (navLabel) navLabel.style.opacity = "0";
    });

  dots.forEach((d, i) => {
    d.addEventListener("click", () => {
      show(i);
      resetAuto();
      if (navLabel) navLabel.style.opacity = "0";
    });
  });

  document.addEventListener("keydown", (e) => {
    if (!isInViewport(section)) return;
    if (e.key === "ArrowRight") {
      next();
      resetAuto();
    } else if (e.key === "ArrowLeft") {
      prev();
      resetAuto();
    }
  });

  function isInViewport(el) {
    const rect = el.getBoundingClientRect();
    return rect.top < window.innerHeight && rect.bottom > 0;
  }

  show(0);
  startAuto();
});

// Explore Engage Enjoy - tab switcher
document.addEventListener('gitamDataReady', function () {
  const tabs = document.querySelectorAll(".eee-tab");
  const panels = document.querySelectorAll(".eee-panel");
  const caption = document.querySelector(".eee-tab-caption");
  tabs.forEach(function (tab) {
    tab.addEventListener("click", function () {
      const target = tab.dataset.tab;
      tabs.forEach(function (t) {
        t.classList.remove("eee-tab-active");
        t.setAttribute("aria-selected", "false");
      });
      panels.forEach(function (p) {
        p.classList.remove("eee-panel-active");
      });
      tab.classList.add("eee-tab-active");
      tab.setAttribute("aria-selected", "true");
      if (caption) {
        var label = tab.querySelector(".eee-tab-label");
        caption.textContent = label ? label.textContent : "";
      }
      const panel = document.querySelector('[data-panel="' + target + '"]');
      if (panel) {
        panel.classList.add("eee-panel-active");
        var grid = panel.querySelector(".eee-grid");
        if (grid) grid.classList.add("in");
      }
    });
  });
});

/* ── Explore Programs filter (academics) — needs window.GITAM_DATA ── */
document.addEventListener('gitamDataReady', function () {
  "use strict";

  if (!document.getElementById("epFilterCols")) return;

  /* ─────────────────────────────────── DATA ─────────────────────────────────── */
  var CAMPUS_NAMES = {
    vizag: "Visakhapatnam",
    hyd: "Hyderabad",
    blr: "Bengaluru",
  };

  var DATA = window.GITAM_DATA || {};

  /* ─────────────────────────────── STATE ──────────────────────────────────── */
  var state = {
    level: "ug",
    disc: "",
    campuses: [],
    selectedProg: null,
    selectedProgName: "",
  };

  /* ─────────────────────────────── HELPERS ────────────────────────────────── */
  function fmt(n) {
    return "\u20B9\u202F" + n.toLocaleString("en-IN");
  }

  /* \u2500\u2500 Programme-finder deep-link mapping \u2500\u2500
 Builds a URL to programme-finder with the campus, discipline
 and course-level facets pre-selected. */
  var GITAM_CAMPUS_ID = { vizag: 2, hyd: 1, blr: 3 };
  var GITAM_DISCIPLINE_ID = {
    Architecture: 17,
    Management: 18,
    "Humanities & Social Sciences": 19,
    Law: 21,
    Nursing: 23,
    Pharmacy: 25,
    Science: 28,
  };

  function gitamDisciplineId(localDisc, progName) {
    // GITAM splits engineering into "Computer Science" (20) and
    // "Core Engineering" (259); route by programme name.
    if (localDisc === "Engineering & Technology") {
      var n = (progName || "").toLowerCase();
      if (
        /comput|artificial intelligence|\bai\b|\bml\b|data science|information tech|software|machine learning|cyber/.test(
          n,
        )
      ) {
        return 20;
      }
      return 259;
    }
    return GITAM_DISCIPLINE_ID[localDisc] || null;
  }

  function buildFinderUrl(localDisc, progName, campusKey) {
    var params = [];
    var camp = GITAM_CAMPUS_ID[campusKey];
    if (camp) params.push("field_campus_target_id=" + camp);
    var did = gitamDisciplineId(localDisc, progName);
    if (did) params.push("field_discipline_target_id_selective=" + did);
    if (state.level) {
      params.push("field_course_level_value_selective=" + state.level);
    }
    /* preselect the clicked course via the finder's search filter */
    if (progName) params.push("q=" + encodeURIComponent(progName));
    return (
      "programme-finder" + (params.length ? "?" + params.join("&") : "")
    );
  }

  function getDisciplines(level) {
    var allDiscs = DATA[level];
    return allDiscs ? Object.keys(allDiscs).sort() : [];
  }

  function getAvailableCampuses() {
    if (!state.disc) return ["vizag", "hyd", "blr"];
    var disc = DATA[state.level] && DATA[state.level][state.disc];
    if (!disc) return ["vizag", "hyd", "blr"];
    var campusSet = {};
    Object.keys(disc.programs).forEach(function (pName) {
      disc.programs[pName].campuses.forEach(function (c) {
        campusSet[c] = true;
      });
    });
    return ["vizag", "hyd", "blr"].filter(function (c) {
      return campusSet[c];
    });
  }

  function getFilteredPrograms() {
    if (!state.disc || !state.campuses.length) return {};
    var disc = DATA[state.level] && DATA[state.level][state.disc];
    if (!disc) return {};
    var available = getAvailableCampuses();
    var activeCampuses = state.campuses.filter(function (c) {
      return available.indexOf(c) !== -1;
    });
    if (!activeCampuses.length) return {};
    var filtered = {};
    Object.keys(disc.programs).forEach(function (pName) {
      var p = disc.programs[pName];
      var match = p.campuses.some(function (c) {
        return activeCampuses.indexOf(c) !== -1;
      });
      if (match) filtered[pName] = p;
    });
    return filtered;
  }

  /* ─────────────────────────────── POPULATE DISCIPLINES ────────────────────── */
  function populateDiscs() {
    var sel = document.getElementById("epDiscSelect");
    if (!sel) return;
    sel.innerHTML =
      '<option value="" disabled selected>Select discipline</option>';
    getDisciplines(state.level).forEach(function (d) {
      var opt = document.createElement("option");
      opt.value = d;
      opt.textContent = d;
      sel.appendChild(opt);
    });
  }

  /* ─────────────────────────────── UPDATE CAMPUS AVAILABILITY ───────────── */
  function updateCampusAvailability() {
    var campusGroup = document.getElementById("epCampusGroup");
    if (campusGroup) {
      campusGroup.classList.toggle("ep-enabled", !!state.disc);
    }
    if (!state.disc) return;
    var available = getAvailableCampuses();
    document.querySelectorAll(".ep-campus-chk").forEach(function (chk) {
      var c = chk.value;
      var ok = available.indexOf(c) !== -1;
      chk.disabled = !ok;
      if (!ok) {
        chk.checked = false;
        state.campuses = state.campuses.filter(function (x) {
          return x !== c;
        });
      }
    });
  }

  /* ─────────────────────────────── RENDER PROGRAM LIST ─────────────────────── */
  var CAMPUS_LABELS = {
    vizag: "Visakhapatnam",
    hyd: "Hyderabad",
    blr: "Bengaluru",
  };
  var CAMPUS_ORDER = ["vizag", "hyd", "blr"];

  function renderProgList() {
    var pg = document.getElementById("epProgGroup");
    if (!pg) return;
    pg.innerHTML = "";
    if (!state.disc) {
      pg.classList.remove("ep-enabled");
      return;
    }
    if (!state.campuses.length) {
      pg.classList.remove("ep-enabled");
      pg.innerHTML =
        '<span style="color:rgba(255,255,255,0.5);font-size:13px;">Select a campus to view programmes</span>';
      return;
    }
    var programs = getFilteredPrograms();
    var keys = Object.keys(programs);
    pg.classList.add("ep-enabled");
    if (!keys.length) {
      pg.innerHTML =
        '<span style="color:rgba(255,255,255,0.5);font-size:13px;">No programmes available at the selected campus(es)</span>';
      return;
    }
    if (state.selectedProgName && !programs[state.selectedProgName]) {
      state.selectedProgName = "";
    }

    CAMPUS_ORDER.forEach(function (c) {
      if (state.campuses.indexOf(c) === -1) return;
      var campusProgs = keys.filter(function (pName) {
        return programs[pName].campuses.indexOf(c) !== -1;
      });
      if (!campusProgs.length) return;

      var group = document.createElement("div");
      group.className = "ep-prog-campus-group";

      var hd = document.createElement("div");
      hd.className = "ep-prog-campus-hd";
      hd.textContent = CAMPUS_LABELS[c] || c;
      group.appendChild(hd);

      campusProgs.forEach(function (pName) {
        var div = document.createElement("div");
        div.className =
          "ep-prog-item" +
          (state.selectedProgName === pName ? " ep-active" : "");
        div.textContent = pName;
        div.setAttribute("data-name", pName);
        div.setAttribute("role", "link");
        div.title = "View this programme on GITAM's programme finder";
        div.addEventListener("click", function () {
          var url = buildFinderUrl(state.disc, pName, c);
          window.open(url, "_blank", "noopener");
        });
        group.appendChild(div);
      });

      pg.appendChild(group);
    });

    updateProgScrollHint();
    requestAnimationFrame(updateProgScrollHint);
  }

  function updateProgScrollHint() {
    var pg = document.getElementById("epProgGroup");
    var wrap = pg && pg.closest(".ep-prog-scroll-wrap");
    if (!wrap || !pg) return;
    var hasScroll = pg.scrollHeight > pg.clientHeight + 2;
    var atBottom = pg.scrollTop + pg.clientHeight >= pg.scrollHeight - 8;
    wrap.classList.toggle("ep-has-scroll", hasScroll);
    wrap.classList.toggle("ep-at-bottom", hasScroll && atBottom);
  }

  /* ─────────────────────────────── BUILD RESULT BLOCK ─────────────────────── */
  function buildCampusCards(pData, activeCampuses) {
    // Show only selected campuses; fall back to all available for this program
    var pool =
      activeCampuses && activeCampuses.length
        ? activeCampuses.filter(function (c) {
            return pData.campuses.indexOf(c) !== -1;
          })
        : pData.campuses;
    var campuses = pool.length ? pool : pData.campuses;
    var html = "";

    html += '<div class="ep-campus-grid">';

    campuses.forEach(function (c) {
      var fee = pData.campusFee ? pData.campusFee[c] : pData.fee;
      var elig = pData.campusElig ? pData.campusElig[c] : pData.elig;
      var effectiveFee = fee.total - fee.sc;

      html += '<div class="ep-campus-card">';
      html +=
        '<div class="ep-campus-card-header">' + CAMPUS_LABELS[c] + "</div>";
      html += '<div class="ep-campus-card-body">';

      // Fee structure label
      html += '<div class="ep-cc-section-label">Fee Structure</div>';
      html += '<div class="ep-cc-fee-row">';
      html +=
        "Program fee <strong>" +
        fmt(fee.total) +
        "/-</strong>&nbsp; | &nbsp;Scholarship <strong>" +
        fmt(fee.sc) +
        "/-</strong>&nbsp; | &nbsp;Effective fee <strong>" +
        fmt(effectiveFee) +
        "/-</strong>";
      html += "</div>";

      // Semester box
      html += '<div class="ep-cc-fee-box">';
      html +=
        '<div class="ep-cc-fee-box-label">Semester Wise (For First Year)</div>';
      html += '<div class="ep-cc-sems">';
      html +=
        '<div><div class="ep-cc-sem-label">Semester 1</div><div class="ep-cc-sem-val">' +
        fmt(fee.s1) +
        "</div></div>";
      html +=
        '<div><div class="ep-cc-sem-label">Semester 2</div><div class="ep-cc-sem-val">' +
        fmt(fee.s2) +
        "</div></div>";
      html += "</div></div>";

      // Eligibility
      html += '<div class="ep-cc-section-label ep-cc-mt">Eligibility</div>';
      html += '<p class="ep-cc-elig">' + elig + "</p>";

      html += "</div></div>";
    });

    html += "</div>";
    html +=
      '<div class="ep-fee-inc">Tuition fees will increase by 5% to 8% in the subsequent years.</div>';
    html +=
      '<div class="ep-cc-note ep-fee-common-note"><strong>Note:</strong> Students who choose to pay the full first-year fee as a single annual payment will be eligible for a 3% discount on the total payable amount.</div>';
    return html;
  }

  function buildResultBlock(pName, pData, activeCampuses) {
    var rows = pData.secs
      .map(function (sec) {
        return (
          "<tr><td>" +
          sec.s +
          "</td><td>" +
          sec.sub +
          "</td><td>" +
          sec.q +
          "</td><td>" +
          sec.m +
          "</td><td>" +
          sec.d +
          "</td></tr>"
        );
      })
      .join("");

    var html = '<div class="ep-detail-block">';

    // Title row - name + campus pills showing which campuses offer this programme
    var campusPills = pData.campuses
      .map(function (c) {
        return (
          '<span class="ep-title-campus-tag">' +
          (CAMPUS_LABELS[c] || c) +
          "</span>"
        );
      })
      .join("");
    html +=
      '<div class="ep-detail-title">' +
      pName +
      '<span class="ep-title-campuses">' +
      campusPills +
      "</span>" +
      "</div>";

    // Minors section (if present)
    if (pData.minors && Object.keys(pData.minors).length) {
      var shortName = pName
        .replace("B.Tech ", "")
        .replace("B.Sc ", "")
        .replace("B.Arch ", "")
        .replace("BBA ", "")
        .replace("B.Com ", "")
        .replace("B.Pharm ", "");
      html += '<div class="ep-minors-section">';
      html +=
        '<p class="ep-minors-intro">For ' +
        shortName +
        " major, here are the minors you can choose from</p>";
      Object.keys(pData.minors).forEach(function (cat) {
        html += '<div class="ep-minor-row">';
        html += '<div class="ep-minor-cat">' + cat + "</div>";
        html += '<div class="ep-minor-tags">';
        pData.minors[cat].forEach(function (m) {
          html += '<span class="ep-minor-tag">' + m + "</span>";
        });
        html += "</div></div>";
      });
      html += "</div>";
    }

    // Campus comparison cards
    html += buildCampusCards(pData, activeCampuses);

    // Exam pattern
    html +=
      '<div class="ep-detail-grid" style="margin-top:28px">' +
      "<div>" +
      '<div class="ep-section-title">Exam pattern</div>' +
      '<p class="ep-detail-text">' +
      pData.examIntro +
      "</p>" +
      '<div class="ep-exam-wrap"><table class="ep-exam-tbl">' +
      "<thead><tr><th>Section</th><th>Subject</th><th>Questions</th><th>Total marks</th><th>Duration</th></tr></thead>" +
      "<tbody>" +
      rows +
      "</tbody>" +
      "</table></div>" +
      "</div>" +
      "<div>" +
      '<div class="ep-section-title">Take a demo test</div>' +
      '<div class="ep-demo-form">' +
      '<input type="text" placeholder="Enter name" aria-label="Your name"/>' +
      '<div class="ep-demo-row">' +
      '<input type="text" placeholder="Enter mobile no." aria-label="Mobile number"/>' +
      '<input type="email" placeholder="Enter email ID" aria-label="Email address"/>' +
      "</div>" +
      '<button class="ep-demo-btn">Get demo test</button>' +
      "</div>" +
      '<div class="ep-section-title ep-mt">Syllabus</div>' +
      '<a href="#" class="ep-syllabus-link"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>Click Here to Download the syllabus</a>' +
      "</div>" +
      "</div>";

    html += "</div>";
    return html;
  }

  /* ─────────────────────────────── RENDER RESULTS ─────────────────────────── */
  function renderResults() {
    var area = document.getElementById("epResultsArea");
    if (!area) return;
    // Programmes now deep-link to GITAM's programme finder, so no fee /
    // eligibility blocks are rendered in-page. Show a short hint once the
    // user has a discipline + campus selected.
    if (state.disc && state.campuses.length) {
      area.innerHTML =
        '<div style="text-align: center; padding: 32px 24px; color: rgba(255, 255, 255, 0.5); font-size: 13.5px; background: rgba(255, 255, 255, 0.02); border: 1px dashed rgba(255, 255, 255, 0.1); border-radius: 16px; font-weight: 500;">Click a programme above to open it on GITAM\'s programme finder, with your filters pre-applied.</div>';
    } else {
      area.innerHTML = "";
    }
  }

  /* ─────────────────────────────── EVENT LISTENERS ─────────────────────────── */
  document.querySelectorAll('input[name="ep-level"]').forEach(function (radio) {
    radio.addEventListener("change", function () {
      state.level = this.value;
      state.disc = "";
      state.campuses = [];
      state.selectedProgName = "";
      populateDiscs();
      var sel = document.getElementById("epDiscSelect");
      if (sel) sel.value = "";
      document.querySelectorAll(".ep-campus-chk").forEach(function (c) {
        c.checked = false;
      });
      document.getElementById("epProgGroup").innerHTML = "";
      document.getElementById("epProgGroup").classList.remove("ep-enabled");
      updateCampusAvailability();
      renderResults();
    });
  });

  var discSel = document.getElementById("epDiscSelect");
  if (discSel) {
    discSel.addEventListener("change", function () {
      state.disc = this.value;
      state.campuses = [];
      state.selectedProgName = "";
      document.querySelectorAll(".ep-campus-chk").forEach(function (c) {
        c.checked = false;
      });
      updateCampusAvailability();
      renderProgList();
      renderResults();
    });
  }

  document.querySelectorAll(".ep-campus-chk").forEach(function (chk) {
    chk.addEventListener("change", function () {
      var c = this.value;
      if (this.checked) {
        if (state.campuses.indexOf(c) === -1) state.campuses.push(c);
      } else {
        state.campuses = state.campuses.filter(function (x) {
          return x !== c;
        });
      }
      state.selectedProgName = "";
      renderProgList();
      renderResults();
    });
  });

  /* ─────────────────────────────── INIT ──────────────────────────────────── */
  populateDiscs();
  updateCampusAvailability();
  document.getElementById("epFilterCols").classList.add("ep-visible");
  var epProgGroup = document.getElementById("epProgGroup");
  if (epProgGroup) {
    epProgGroup.addEventListener("scroll", updateProgScrollHint);
    window.addEventListener("resize", updateProgScrollHint);
  }
});

/* ── Why-GITAM stat counter ── */
/* ── Stat counter animation (scroll-triggered) ── */
document.addEventListener('gitamDataReady', function () {
  var DURATION = 1600;

  function easeOutExpo(t) {
    return t === 1 ? 1 : 1 - Math.pow(2, -10 * t);
  }

  function formatValue(val, fmt) {
    if (fmt === "comma") return Math.round(val).toLocaleString("en-IN");
    if (fmt === "decimal1") return val.toFixed(1);
    return Math.round(val).toString();
  }

  function animateCounter(el) {
    var target = parseFloat(el.dataset.count);
    var fmt = el.dataset.format || "integer";
    var startVal = target * 0.05;
    var startTime = null;

    function step(ts) {
      if (!startTime) startTime = ts;
      var progress = Math.min((ts - startTime) / DURATION, 1);
      el.textContent = formatValue(
        startVal + (target - startVal) * easeOutExpo(progress),
        fmt,
      );
      if (progress < 1) requestAnimationFrame(step);
      else el.textContent = formatValue(target, fmt);
    }
    requestAnimationFrame(step);
  }

  var section = document.getElementById("sec-stats");
  if (!section || !("IntersectionObserver" in window)) return;

  var fired = false;
  var observer = new IntersectionObserver(
    function (entries) {
      if (fired || !entries[0].isIntersecting) return;
      fired = true;
      observer.disconnect();

      section.querySelectorAll(".why-card").forEach(function (cell, i) {
        setTimeoutdocument.addEventListener('gitamDataReady', function () {
          cell.classList.add("counted");
          var counter = cell.querySelector("[data-count]");
          if (counter) animateCounter(counter);
        }, i * 80);
      });
    },
    { threshold: 0.2, rootMargin: "0px 0px -60px 0px" },
  );

  observer.observe(section);
});

/* ── Hero stats count-up ── */
/* ── Hero stats count-up animation ── */
document.addEventListener('gitamDataReady', function () {
  var reduce =
    window.matchMedia &&
    window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  function runCount(el, delay) {
    if (el.dataset.counted) return;
    var target = parseFloat(el.getAttribute("data-count"));
    if (isNaN(target)) return;
    var decimals = parseInt(el.getAttribute("data-decimals") || "0", 10);
    function format(v, d) {
      if (d === 0) return Math.round(v).toLocaleString("en-IN");
      return v.toLocaleString("en-IN", {
        minimumFractionDigits: d,
        maximumFractionDigits: d,
      });
    }
    function start() {
      if (el.dataset.counted) return;
      el.dataset.counted = "1";
      if (reduce) {
        el.textContent = format(target, decimals);
        return;
      }
      var duration = 1600,
        startTime = null;
      function step(ts) {
        if (startTime === null) startTime = ts;
        var p = Math.min((ts - startTime) / duration, 1);
        el.textContent = format(target * (1 - Math.pow(1 - p, 3)), decimals);
        if (p < 1) requestAnimationFrame(step);
        else el.textContent = format(target, decimals);
      }
      el.textContent = format(0, decimals);
      requestAnimationFrame(step);
    }
    if (delay) setTimeout(start, delay);
    else start();
  }
  function initStatsCounts() {
    var bar = document.getElementById("sec-hero-stats");
    if (!bar) return;
    bar.querySelectorAll(".count").forEach(function (el, i) {
      runCount(el, i * 120);
    });
  }
  if (reduce) {
    initStatsCounts();
  } else {
    var bar = document.getElementById("sec-hero-stats");
    if (bar && "IntersectionObserver" in window) {
      var obs = new IntersectionObserver(
        function (entries) {
          if (entries[0].isIntersecting) {
            initStatsCounts();
            obs.disconnect();
          }
        },
        { threshold: 0.2 },
      );
      obs.observe(bar);
    } else if (bar) {
      initStatsCounts();
    }
  }
});

/* ── Scroll-reveal observer ── */
/* ── Scroll reveal observer ──────────────────────────────────
 Adds .in to header blocks and grids as they scroll into view,
 triggering the CSS fade/slide defined in the head. Uses a
 scroll-position check (reliable across browsers, degrades
 safely). Mirrors new-home-page-with-transitions.html. */
document.addEventListener('gitamDataReady', function () {
  var reduce =
    window.matchMedia &&
    window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  var blockSel =
    ".explore-hd-title, .explore-hd-sub, .campuses-header, " +
    ".accred-header, .placements-header, .recruiters-hero, .higher-ed-header, " +
    ".entre-header, .beyond-header, .fac-head, .disc-head, .disc-header, .hostels-hero-inner, " +
    ".eee-header, .tm-intro, .section-hd";
  var groupSel =
    ".why-grid, .campuses-grid, .he-grid, .entre-bento, " +
    ".beyond-bento, .eee-grid, .contact-grid";

  var targets = Array.prototype.slice.call(
    document.querySelectorAll(blockSel + ", " + groupSel),
  );
  if (!targets.length) return;

  function reveal(el) {
    el.classList.add("in");
    if (el.classList.contains("eee-header")) {
      document.querySelectorAll(".eee-panel-active .eee-grid").forEach(reveal);
    }
  }

  if (reduce) {
    targets.forEach(reveal);
    return;
  }

  function check() {
    var vh = window.innerHeight || document.documentElement.clientHeight;
    for (var i = targets.length - 1; i >= 0; i--) {
      var r = targets[i].getBoundingClientRect();
      if (r.top < vh * 0.88 && r.bottom > 0) {
        reveal(targets[i]);
        targets.splice(i, 1);
      }
    }
  }

  var ticking = false;
  function onScroll() {
    if (!ticking) {
      requestAnimationFramedocument.addEventListener('gitamDataReady', function () {
        check();
        ticking = false;
      });
      ticking = true;
    }
  }
  window.addEventListener("scroll", onScroll, { passive: true });
  window.addEventListener("resize", onScroll);
  window.addEventListener("load", check);
  check();

  /* Safety net: never leave content hidden if something goes wrong. */
  setTimeoutdocument.addEventListener('gitamDataReady', function () {
    if (targets.length) check();
  }, 3000);
});

/* ── R&I YouTube: size iframe to cover its band ── */
document.addEventListener('gitamDataReady', function () {
  var wrap = document.getElementById("riYtWrap");
  var frame = document.getElementById("riYtFrame");
  if (!wrap || !frame) return;
  function sizeRiFrame() {
    var w = wrap.offsetWidth;
    var h = wrap.offsetHeight;
    if (w / h > 16 / 9) {
      frame.style.width = "100%";
      frame.style.height = Math.ceil((w * 9) / 16) + "px";
    } else {
      frame.style.height = "100%";
      frame.style.width = Math.ceil((h * 16) / 9) + "px";
    }
  }
  sizeRiFrame();
  window.addEventListener("resize", sizeRiFrame);
});

/* ── Hero YouTube background: size iframe to cover hero ── */
document.addEventListener('gitamDataReady', function () {
  var wrap = document.querySelector(".hero-bg-video");
  var frame = document.getElementById("heroYtFrame");
  if (!wrap || !frame) return;
  function sizeFrame() {
    var w = wrap.offsetWidth;
    var h = wrap.offsetHeight;
    if (w / h > 16 / 9) {
      frame.style.width = "100%";
      frame.style.height = Math.ceil((w * 9) / 16) + "px";
    } else {
      frame.style.height = "100%";
      frame.style.width = Math.ceil((h * 16) / 9) + "px";
    }
  }
  sizeFrame();
  window.addEventListener("resize", sizeFrame);
});

/* ── Faculty: tap a card row to pause scrolling ── */
document.addEventListener('gitamDataReady', function () {
  var rows = Array.prototype.slice.call(
    document.querySelectorAll("#sec-faculty .apf-row"),
  );
  if (!rows.length) return;
  rows.forEach(function (row) {
    row.addEventListener("click", function () {
      var willPause = !row.classList.contains("is-paused");
      rows.forEach(function (r) {
        r.classList.toggle("is-paused", willPause);
      });
    });
  });
});

/* ── Cinematic video section: viewport reveal + YouTube modal ── */
document.addEventListener('gitamDataReady', function () {
  var inner = document.getElementById("vidShowcaseInner");
  var bgFrame = document.getElementById("vidBgPlayer");
  var playBtn = document.getElementById("vidPlayBtn");
  var modal = document.getElementById("vidModal");
  var modalBackdrop = document.getElementById("vidModalBackdrop");
  var modalClose = document.getElementById("vidModalClose");
  var ytFrame = document.getElementById("vidYtFrame");
  var YT_ID = "No-ElBJqXsg";
  var YT_EMBED = "https://www.youtube-nocookie.com/embed/";
  var pageOrigin =
    window.location.origin && window.location.origin !== "null"
      ? encodeURIComponent(window.location.origin)
      : "";
  var BG_EMBED =
    YT_EMBED +
    YT_ID +
    "?autoplay=1&mute=1&loop=1&playlist=" +
    YT_ID +
    "&controls=0&modestbranding=1&rel=0&playsinline=1&enablejsapi=1" +
    (pageOrigin ? "&origin=" + pageOrigin : "");
  var MODAL_EMBED =
    "https://www.youtube.com/embed/" +
    YT_ID +
    "?autoplay=1&rel=0&modestbranding=1&playsinline=1";

  if (!inner) return;

  function hasBgEmbed() {
    var src = bgFrame.getAttribute("src") || bgFrame.src || "";
    return src.indexOf("youtube") !== -1;
  }

  function ytCommand(func) {
    if (!bgFrame.contentWindow || !hasBgEmbed()) return;
    bgFrame.contentWindow.postMessage(
      JSON.stringify({ event: "command", func: func, args: "" }),
      "*",
    );
  }

  function startBgVideo() {
    if (!hasBgEmbed()) {
      bgFrame.src = BG_EMBED;
    } else {
      ytCommand("playVideo");
      inner.classList.add("video-started");
    }
  }

  function stopBgVideo() {
    if (hasBgEmbed()) {
      ytCommand("pauseVideo");
    }
    inner.classList.remove("video-started");
  }

  function unloadBgVideo() {
    bgFrame.src = "about:blank";
    inner.classList.remove("video-started");
  }

  /* ── Scale-up transition at 15% visibility ── */
  var revealObserver = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        inner.classList.toggle("is-visible", entry.isIntersecting);
      });
    },
    { threshold: 0.15 },
  );
  revealObserver.observe(inner);

  /* ── In view: load muted background YouTube video ── */
  var playObserver = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          inner.classList.add("is-playing");
          startBgVideo();
        } else {
          inner.classList.remove("is-playing");
          unloadBgVideo();
        }
      });
    },
    { threshold: 0.35 },
  );
  playObserver.observe(inner);

  bgFrame.addEventListener("load", function () {
    if (hasBgEmbed()) {
      inner.classList.add("video-started");
    }
  });

  /* ── Open YouTube modal (with audio) ── */
  function openModal() {
    stopBgVideo();
    ytFrame.src = MODAL_EMBED;
    modal.classList.add("is-open");
    modal.setAttribute("aria-hidden", "false");
    document.body.style.overflow = "hidden";
  }

  /* ── Close YouTube modal ── */
  function closeModal() {
    modal.classList.remove("is-open");
    modal.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";
    ytFrame.src = "";
    if (inner.classList.contains("is-playing")) {
      startBgVideo();
    }
  }

  if (playBtn) {
    playBtn.addEventListener("click", function (e) {
      // Button sits inside the clickable wrap; stop the wrap handler from
      // also firing openModal (which would reload the modal iframe twice).
      e.stopPropagation();
      openModal();
    });
  }
  // The whole frame is clickable too, so a click anywhere on the tile opens it.
  inner.addEventListener("click", openModal);
  if (modalBackdrop) modalBackdrop.addEventListener("click", closeModal);
  if (modalClose) modalClose.addEventListener("click", closeModal);
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape" && modal && modal.classList.contains("is-open")) {
      closeModal();
    }
  });
});

/* ── Disciplines track: auto-scroll with pause on hover/touch ── */
document.addEventListener('gitamDataReady', function () {
  var track = document.getElementById("discTrack");
  if (!track) return;

  // Auto-scroll: continuous loop
  var scrollSpeed = 1;
  var autoScrollId;
  var paused = false;

  function autoScroll() {
    if (!paused) {
      track.scrollLeft += scrollSpeed;
      // Loop back when reaching the end
      if (track.scrollLeft >= track.scrollWidth - track.clientWidth) {
        track.scrollLeft = 0;
      }
    }
    autoScrollId = requestAnimationFrame(autoScroll);
  }
  autoScrollId = requestAnimationFrame(autoScroll);

  // Pause on hover / touch
  track.addEventListener("mouseenter", function () {
    paused = true;
  });
  track.addEventListener("mouseleave", function () {
    paused = false;
  });
  track.addEventListener(
    "touchstart",
    function () {
      paused = true;
    },
    { passive: true },
  );
  track.addEventListener("touchend", function () {
    setTimeoutdocument.addEventListener('gitamDataReady', function () {
      paused = false;
    }, 2000);
  });
});

/* ── Touch-flip cards (higher-ed, entrepreneurs, beyond-the-resume) —
      one reusable initializer replaces three identical inline blocks ── */
document.addEventListener('gitamDataReady', function () {
  function initTouchFlip(selector) {
    var cards = document.querySelectorAll(selector);
    if (!cards.length) return;
    var touchMq = window.matchMedia("(hover: none), (max-width: 600px)");

    function isTouchMode() {
      return touchMq.matches;
    }

    cards.forEach(function (card) {
      card.addEventListener("click", function (e) {
        if (!isTouchMode()) return;
        e.preventDefault();
        e.stopPropagation();
        var open = card.classList.contains("is-revealed");
        cards.forEach(function (c) {
          c.classList.remove("is-revealed");
          c.blur();
        });
        if (!open) card.classList.add("is-revealed");
      });
    });

    document.addEventListener("click", function (e) {
      if (!isTouchMode()) return;
      if (!e.target.closest(selector)) {
        cards.forEach(function (c) {
          c.classList.remove("is-revealed");
          c.blur();
        });
      }
    });

    touchMq.addEventListener("change", function () {
      cards.forEach(function (c) {
        c.classList.remove("is-revealed");
      });
    });
  }

  initTouchFlip(".he-card");
  initTouchFlip(".ec");
  initTouchFlip(".bt-card");
});
