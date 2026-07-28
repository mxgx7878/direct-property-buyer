// Placeholder — replace with your existing app.js (phone reveal, burger menu, dropdown, [data-year], form handling)
(function(){
var TEL="+0421300305",PHONE="0421 300 305";
var wrap=document.getElementById('mnavWrap'),mnav=document.getElementById('mnav');
function openMenu(){wrap.classList.remove('hidden');requestAnimationFrame(function(){mnav.classList.add('open');});}
function closeMenu(){if(!wrap)return;mnav.classList.remove('open');setTimeout(function(){wrap.classList.add('hidden');},320);}
var b=document.getElementById('burger');if(b)b.addEventListener('click',openMenu);
var mc=document.getElementById('mclose');if(mc)mc.addEventListener('click',closeMenu);
var ms=document.getElementById('mscrim');if(ms)ms.addEventListener('click',closeMenu);
var rp=document.getElementById('revealPhone');if(rp){rp.addEventListener('click',function(){rp.outerHTML='<a href="tel:'+TEL+'" class="text-gold-soft hover:text-white font-semibold transition">'+PHONE+'</a>';});}
var rpf=document.getElementById('revealPhoneFooter');if(rpf){rpf.addEventListener('click',function(){rpf.outerHTML='<a href="tel:'+TEL+'" class="text-gold-soft/90 hover:text-gold-soft transition">'+PHONE+'</a>';});}
var rpf=document.getElementById('revealPhoneContact');if(rpf){rpf.addEventListener('click',function(){rpf.outerHTML='<a href="tel:'+TEL+'" class="text-black hover:text-gold-soft transition">'+PHONE+'</a>';});}
var rpf=document.getElementById('revealPhoneContact2');if(rpf){rpf.addEventListener('click',function(){rpf.outerHTML='<a href="tel:'+TEL+'" class="text-black hover:text-gold-soft transition">'+PHONE+'</a>';});}
var rpf=document.getElementById('revealPhoneDirectCash');if(rpf){rpf.addEventListener('click',function(){rpf.outerHTML='<a href="tel:'+TEL+'" class="text-black hover:text-gold-soft transition">'+PHONE+'</a>';});}
document.querySelectorAll('[data-year]').forEach(function(e){e.textContent=new Date().getFullYear();});
var obs=new IntersectionObserver(function(es){es.forEach(function(en){if(en.isIntersecting){en.target.classList.add('vis');obs.unobserve(en.target);}});},{threshold:0.12,rootMargin:'0px 0px -40px 0px'});
document.querySelectorAll('.reveal').forEach(function(el){obs.observe(el);});
var slides=document.querySelectorAll('#heroSlider .slide');
if(slides.length){var dots=document.querySelectorAll('#heroDots .dot');var i=0;var show=function(n){slides.forEach(function(s,k){s.classList.toggle('active',k===n);});dots.forEach(function(d,k){d.classList.toggle('active',k===n);});i=n;};show(0);var reduce=window.matchMedia('(prefers-reduced-motion:reduce)').matches;dots.forEach(function(d,k){d.addEventListener('click',function(){show(k);});});if(!reduce){setInterval(function(){show((i+1)%slides.length);},5500);}}
document.querySelectorAll('form[data-enquiry]').forEach(function(f){f.addEventListener('submit',function(e){e.preventDefault();window.location.href='thank-you.html';});});
document.querySelectorAll('form[data-news]').forEach(function(f){f.addEventListener('submit',function(e){e.preventDefault();var m=f.querySelector('[data-news-msg]');if(m){m.textContent='Thanks \u2014 you are subscribed (demo).';m.classList.remove('hidden');}f.reset();});});
var chips=document.querySelectorAll('[data-cat-chip]');
if(chips.length){chips.forEach(function(c){c.addEventListener('click',function(){chips.forEach(function(x){x.classList.remove('active');});c.classList.add('active');var cat=c.getAttribute('data-cat-chip');document.querySelectorAll('[data-guide]').forEach(function(g){var ok=(cat==='all'||g.getAttribute('data-guide')===cat);g.style.display=ok?'':'none';});});});}
})();