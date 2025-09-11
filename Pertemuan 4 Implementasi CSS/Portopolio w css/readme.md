# CSS Navbar pada Portofolio Saya

<h3>CSS Navbar:</h3>

```css
.navbar {
  position: sticky; top: 0; z-index: 10;
  display: flex; justify-content: space-between; align-items: center;
  padding: 1rem 2rem;
  background: rgba(0,0,0,0.6); backdrop-filter: blur(8px);
  border-bottom: 1px solid rgba(255,255,255,0.1);
}
.navbar .logo { font-weight: bold; }
.nav-links { list-style: none; display: flex; gap: 1rem; }
.nav-links a, .nav-links button {
  color: #ccc; background: none; border: none; cursor: pointer;
  text-decoration: none;
  transition: color 0.3s;
}
```
<h4>Analisis:</h4>
.navbar { position: sticky; top: 0; z-index: 10; }

- position: sticky: elemen bersifat seperti position: relative sampai kondisi scroll mencapai top: 0, lalu berubah menjadi fixed relatif ke scrolling container terdekat.

- top: 0: batas jarak atas ketika "menempel".

- z-index: 10: memastikannya berada di atas konten lain; nilai 10 biasanya cukup, tapi jika elemen lain punya z-index lebih besar perlu disesuaikan.

<br>

.navbar { display: flex; justify-content: space-between; align-items: center; }
- display:flex: membuat layout baris fleksibel.
- justify-content: space-between: logo di kiri, nav elemen di kanan.
- align-items: center: vertikal center semua anak.

<h3>CSS Image:</h3>

```css
.foto img {
  width: 80%;
  height: 500px;
  object-fit: cover;
  border-radius: 12px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.2);
  transition: transform 0.3s, box-shadow 0.3s;
  cursor: pointer;
}


.foto img:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 16px rgba(0,0,0,0.3);
}
```