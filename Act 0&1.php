<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #476dbf;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: Green;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <H1 style="font-size:60px;">🐱 About Me 🐱</H1>
</div>


<div class="row">
  <div class="column">
    <div class="card">
      <img src="https://scontent.fmnl7-1.fna.fbcdn.net/v/t39.30808-6/352951175_1545148209349817_9192925496036092906_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=174925&_nc_eui2=AeFbADlzAt640PlU1CNCJ5cviVDNz1oAUNqJUM3PWgBQ2hOgdGOQjlexcqKGGQn22st-aAhpt788HCjyX4rmxhU8&_nc_ohc=lj5mghcF8aMAX-e-mKQ&_nc_ht=scontent.fmnl7-1.fna&oh=00_AfC4cUDqskLU01kSeBma6NuUfN3eXk459RxjdD594ONcSQ&oe=64F4F81C" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Michael Angelo Ramilo</h2>
        <p class="title">Hey there! I'm Michael Angelo Ramilo and here's a sneak peek into what makes me, well, me:</p>
        <p>🎓 I've been a student at Central Colleges of the Philippines since I was in grade 7, and I've continued my educational journey there up to my current status as a fourth-year college student. This institution has been a significant part of my academic path, providing me with opportunities for growth and learning across these years. 📚🏫 </p>
        <p>🐾 Cat Aficionado: If there's one thing that instantly brightens up my day, it's those furry, whiskered bundles of joy – cats! From their quirky behavior to their soft purrs, I can't get enough of these adorable creatures.

         <br><br>Anime Enthusiast 
       🌟: I'm an avid consumer of anime, drawn to the captivating stories, diverse characters, and stunning animations that each series brings to life. Exploring various genres and immersing myself in imaginative universes is a source of endless joy.

<br><br>Gaming Addict 🎮: Video games have a special place in my heart. Engaging in virtual adventures, collaborating with teammates, and embarking on quests in fantastical worlds offer a unique and interactive form of entertainment. The vibrant gaming community and competitive spirit further enhance my enjoyment.</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="https://scontent.fmnl7-1.fna.fbcdn.net/v/t1.15752-9/355929718_788692822984475_4225036512484672148_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeF8uDCLtRA5FT1jwybXWUzVGdG8zxjZw84Z0bzPGNnDznIXZA85S-ww2YIBSkqH81HvDlVmqJqjlc0AEJ967LYx&_nc_ohc=G2ReNc7TBXoAX-AxD81&_nc_ht=scontent.fmnl7-1.fna&oh=03_AdTlnzP4rurBKPWLucPpBEUZpq34m3tFWwJ2WCXITN_9sg&oe=6516A3A0" alt="Miki" style="width:100%">
      <div class="container">
        <h2>Miki "Bundat" The Cat</h2>
        <p>Meet Miki and Mimi: A Purrfect Pair! In our cozy abode, we are graced by the presence of two charming feline friends – Miki and Mimi. Miki, the white and black cat, exudes an air of mystery with her striking coat resembling a moonlit night, while Mimi, our vibrant orange ball of fur, brings a burst of sunshine into every corner of our home. Miki's thoughtful demeanor perfectly complements Mimi's playful antics, creating a balanced harmony of companionship. Together, they fill our lives with whiskered kisses, cozy snuggles, and a symphony of meows that resonate with pure joy.</p>

      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="https://scontent.fmnl7-1.fna.fbcdn.net/v/t1.15752-9/371147178_307518475289342_2971994168849531941_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeG9inD8DfUsUZ-ODJ4CxWobuIFAm9hQxw-4gUCb2FDHDz-NitaeBpGGLtDELYbWvlgPPLlf0rcHcIsf8op-59en&_nc_ohc=NuHOcVAhGEYAX81lPml&_nc_ht=scontent.fmnl7-1.fna&oh=03_AdSHsrbpGmvhgy82qJwHVi1TBNWMu0VnFfLWPjo6L5PFpA&oe=65169859" alt="John" style="width:100%">
      <div class="container">
        <h2>Mimi "Makulit" The Cat</h2>


      </div>
    </div>
  </div>
</div>

</body>
</html>
