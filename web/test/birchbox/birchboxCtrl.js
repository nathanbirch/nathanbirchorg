testApp.controller('BirchBoxCtrl', function($scope, $http, $rootScope) {

  $scope.MovieTitleArray = ["17 Again", "27 Dresses", "A Beautiful Mind", "A Christmas Story", "A Cinderella Story", "A Knight's Tale", "A Little Princess", "A Man For All Seasons", "A Night at the Museum", "A Walk in the Clouds", "The Abyss", "Aladdin", "All Dogs go to Heaven", "Amazing Grace", "Andy Griffeth", "Anne of Green Gables 1", "Ant-Man", "Antz", "Arachnophobia", "Atlantis 2 - Milo's Return", "August Rush", "Austenland", "Avatar", "The Avengers 1", "The Avengers 2 - Age of Ultron", "AVP", "Back to the Future 1", "Back to the Future 2", "Back to the Future 3", "Baptists at our Barbecue", "Behind Enemy Lines", "The Berenstein Bears Movie", "The Best Exotic Marigold Hotel", "Between Heaven and Earth", "Big", "Big Business", "The Black Stallion", "Blackbeard's Ghost", "Blast From The Past", "The Blind Side", "Blue Streak", "The Book of Mormon Movie", "The Bourne Identity", "The Bourne Supremacy", "The Bourne Ultimatum", "Brave", "Breach", "The Bucket List", "Captain America 1 - The First Avenger", "Captain America 2 - The Winter Soldier", "Cars", "Cars 2", "Cats and Dogs", "Cheaper By The Dozen", "Cheaper by the Dozen 2", "Chicken Little", "A Bush Christmas", "A Christmas Kiss", "A Family Thanksgiving", "A Holiday to Remember", "A Song for the Season", "Annie Claus is Coming to Town", "Frosty the Snowman", "Frosty the Snowman 2", "Holiday Engagement", "Mr. St. Nick", "Scrooged", "The Most Wonderful Time of the Year", "The Chronicles of Narnia - Prince Caspian", "The Chronicles of Narnia - The Lion, the Witch and the Wardrobe, The", "Cinderella", "Cinderella", "Clear and Present Danger", "Clue", "The Count of Monte Cristo", "The Day After Tomorrow", "Deep Impact", "Despicable Me", "Diary of a Wimpy Kid", "Diary of a Wimpy Kid - Rodrick Rules", "The Dream Team", "Dreamer", "Eagle Eye", "Elf", "Emperors New Groove", "Enchanted", "Ender's Game", "Evan Almighty", "Ever After", "Facing the Giants", "Faith Like Potatoes", "Fantasia 2000", "The Fantastic Four", "The Fantastic Four - Rise of the Silver Surfer", "Far and Away", "Akeelah and the Bee", "Alan and Naomi", "Behind the Waterfall", "Believe in Me", "Booky and the Secret Santa", "Christy - Finding Faith", "Christy 2 - Return to Cutter Gap", "City Boy", "Friendship's Field", "Heidi", "Jacob's Harvest", "Miracle Dogs", "Rigoletto", "Safe Harbor", "Seasons of the Heart", "Split Infinity", "The Impossible Elephant", "The Prince, the Princess, and the Bee", "The Velveteen Rabbit", "Tomás and the Rainbow", "White Wolves 2 - Legend ofthe Wild", "Finding Nemo", "Fireproof", "Firewall", "First Knight", "The First Wives Club", "Flight Plan", "Forever Young", "The Four Feathers", "Freaky Friday", "Frozen", "Funny Girl", "Funny Lady", "The Game Plan", "Get Smart", "GI Joe", "Gifted Hands", "The Giver", "The Goonies", "Gravity", "Grumpy Old Men", "The Guardian", "Hairspray", "Harry Potter 1 - The Sorcerer's Stone", "Harry Potter 2 - The Chamber of Secrets", "Harry Potter 3 - The Prisoner of Azkaban", "Harry Potter 4 - The Goblet of Fire", "Harry Potter 5 - The Order of the Pheonix", "Harry Potter 6 - The Half Blood Prince", "Harry Potter 7 - The Deathly Hallows Part 1", "Harry Potter 7 - The Deathly Hallows Part 2", "Herbie Fully Loaded", "Hercules", "Hidalgo", "Hocus Pocus", "Home Alone", "How to Train Your Dragon", "The Hundred-Foot Journey", "The Hunger Games 1", "The Hunger Games 2 - Catching Fire", "The Hunger Games 3 - MockingJay Part 1", "The Hunt for Red October", "I Robot", "Ice Age", "The Illusionist", "In Good Company", "Inception", "The Incredibles", "Independence Day", "Indiana Jones 4", "Inside Out", "The Interpreter", "Interstellar", "The Iron Giant", "Jack Ryan - Shadow Recruit", "James Bond - Casino Royale", "James Bond - Quantum of Solace", "James Bond - Skyfall", "Journey to the Center of the Earth", "Julie and Julia", "Jumanji", "Jurassic Park 1", "Jurassic Park 3", "Just Like Heaven", "The Karate Kid", "Kate and Leopold", "King Kong", "Knight and Day", "Krueger Christmas", "The Land Before Time", "Leap Year", "Legally Blonde", "Legally Blonde 2", "The Lego Movie", "Letters to Juliet", "The Lion King", "The Little Mermaid", "The Little Princess", "The Little Rascals", "Little Women", "Live Free or Die Hard", "The Lord of the Rings 1 - The Fellowship of the Ring", "The Lord of the Rings 2 - The Two Towers", "The Lord of the Rings 3 - Return of the King", "Lost in Space", "Love Comes Softly", "Love Happens", "The Magnificent Seven", "Man From Snowy River", "Man of Steel", "Marley & Me", "The Martian", "Master and Commander", "Material Girls", "Matilda", "Maverick", "Meet the Mormons", "Megamind", "Memphis Belle", "Men in Black I", "Men in Black II", "Mighty Joe Young", "Million Dollar Arm", "Miracle on 34th Street", "Mirror Mirror", "Miss Congeniality", "Miss Congeniality 2 - Armed and Fabulous", "Mission Impossible", "Mission Impossible 4 Ghost Protocol", "Moneyball", "Monsters vs Aliens", "Monty Python and the Holy Grail", "Mr. and Mrs. Smith", "Mr. Deeds", "The Mummy", "The Mummy Returns", "My Best Friend's Wedding", "My Big Fat Greek Wedding", "Nacho Libre", "Napoleon Dynamite", "National Treasure", "National Treasure 2 - The Book of Secrets", "New in Town", "Nine to Five", "Ocean's Eleven", "October Sky", "Over the Hedge", "Overboard", "The Pacifier", "The Parent Trap", "Pay it Forward", "The Peaceful Warrior", "Pearl Harbor", "Percy Jackson 1 - The Lightning Thief", "Percy Jackson 2 - Seas of Monsters", "Persuasion", "The Phantom of the Opera", "The Pink Panther", "Pirates of the Carribean 1 - The Curse of the Black Pearl", "Pirates of the Carribean 2 - Dead Man's Chest", "Pirates of the Carribean 3 - At World's End", "Rise of the Planet of the Apes (1)", "Dawn of the Planet of the Apes (2)", "The Planet of the Apes", "Pocahontas", "The Polar Express", "Poseidon", "Pride and Prejudice", "Pride and Prejudice", "The Prince and Me", "The Princess Bride", "The Princess Diaries", "Pure Country", "The Pursuit of Happyness", "Raise Your Voice", "Ratatouille", "RED", "RED 2", "Reign of Fire", "Remember the Titans", "Resurrecting the Champ", "Return to Me", "Rise of the Guardians", "Robin Hood", "Robin Hood Prince of Thieves", "The Rookie", "Rudy", "Runaway Bride", "The Rundown", "Safe Haven", "Salt", "The Sandlot", "School of Rock", "Seabiscuit", "Secondhand Lions", "The Secret Garden", "Sense and Sensability", "Seven Brides For Seven Brothers", "Seven Pounds", "Shark Tale", "Sherlock Holmes", "She's the Man", "Shrek 1", "Shrek 2", "Shrek 3", "Simon Birch", "Singing in the Rain", "Sister Act 1", "Sister Act 2", "Sleeping Beauty", "Sleepless in Seattle", "The Sound of Music", "Space Jam", "Spider-man 1", "The Amazing Spider-man", "Spider-man 2", "Spider-man 3", "Star Trek 1", "Star Trek 2 - Into Darkness", "Star Wars Episode I - The Phantom Menace", "Star Wars Episode II - Attack of the Clones", "Star Wars Episode III - Revenge of the Sith", "Star Wars Episode IV - A New Hope", "Star Wars Episode V - The Empire Strikes Back", "Star Wars Episode VI - Return of the Jedi", "Star Wars Episode VII - The Force Awakens", "Stardust", "State of Play", "Stomp the Yard", "The Sum of All Fears", "Sweet Home Alabama", "Swing Vote", "Sydney White", "Tangled", "Tarzan", "The Terminal", "Thor", "Thor 2 - The Dark World", "The Three Amigos", "Timeline", "Titan A.E.", "Tora! Tora! Tora!", "Traitor", "Transformers", "Tuck Everlasting", "Twilight Saga 1 - Twilight", "Twilight Saga 2 - New Moon", "Twilight Saga 3 - Eclipse", "Twilight Saga 4 - Breaking Dawn Part 1", "Twilight Saga 4- Breaking Dawn Part 2", "Twister", "The Ultimate Gift", "Unstoppable", "Up", "Vantage Point", "Wall-E", "The Wedding Planner", "Welcome to Mooseport", "What a Girl Wants", "What About Bob", "White House Down", "Willow", "Willy Wonka and the Chocolate Factory", "Willy Wonka and the Chocolate Factory", "Wreck-it Ralph", "X-Men ", "X-Men 2", "X-Men 3 - The Last Stand", "X-Men Origins Wolverine", "X-Men First Class", "X-Men Days of Future Past", "Yours, Mine and Ours", "You've Got Mail", "A Goofy Movie", "An Extremely Goofy Movie", "Monsters Inc.", "Innerspace", "Iron Man ", "Indiana Jones - Raiders of the Lost Ark", "Indiana Jones - The Temple of Doom", "Indiana Jones - The Last Crusade", "Iron Man 2", "Casper", "Fiddler on the Roof", "The Single's Ward", "It's a Wonderful Life", "Toy Story 2", "Dear John", "Iron Man 3", "A League of Their Own", "Batman Begins", "Daredevil", "Ocean's Thirteen", "Sahara", "Sneakers", "Dark Knight", "The Fugitive", "The Island", "17 Miracles", "20,000 Leagues Under the Sea", "2012", "Apollo 13", "The Best Two Years", "Charly", "Cowboys and Aliens", "Easter Dream", "The Green Lantern", "Harry and the Hendersons", "The Incredible Hulk", "Johny Lingo", "Legacy", "Mobsters and Mormons", "A Night at the Museum 2 - Battle of the Smithsonian", "The Other Side of Heaven", "The 2nd Singles Ward", "The Testaments", "Tron", "Tron: Legacy", "War Games", "The Grinch", "Kung Fu Panda", "Astroboy", "Bedtime Stories", "Darby O'Gill and the Little People", "The Chronicles of Narnia - Voyage of the Dawn Treader", "Angels in the Outfield", "Honey, I Shrunk the Kids", "Swiss Family Robinson", "High School Musical", "Kindergarten Cop", "Bee Movie", "A Bug's Life", "Atlantis - The Lost Empire", "Alice in Wonderland", "Bambi", "Beauty and the Beast", "Bedknobs and Broomsticks", "Hunchback of Notre Dame", "Lady and the tramp", "Lilo and Stitch", "Mary Poppins", "Saints and Soldiers", "Bolt", "Dinosaur", "Peter Pan", "Pooh's Heffalump Movie", "Sword in the Stone", "Thumbelina", "Presto", "Robin Hood", "TMNT", "Happy Feet", "Everyone's Hero", "Igor", "Open Season", "Tinkerbell", "Toy Story", "Toy Story 3", "Tinkerbell and the Lost Treasure", "Tinkerbell and the Great Fairy Rescue", "The Lion King 2 - Simba'S Pride", "Ice Age 3 - Dawn Of The Dinosaurs", "Madagascar 2 - Escape from Africa", "Gnomeo and Julie", "Horton Hears a Who", "Ice Age 4 - Continental Drift", "O Brother, Where Art Thou", "Shanghai Noon", "Home Alone 2 - Lost in New York", "Hook", "Chicken Run", "Newsies"];
  $scope.movieInfo = [];
  $scope.submit = function(){
      for (i = 0; i < $scope.MovieTitleArray.length; i++) {
          var requestUrl = 'http://www.omdbapi.com/?plot=full&t=' + $scope.MovieTitleArray[i];
          $http.get(requestUrl).then(function(response){
              if(response.data.Error) {
                var currentMovie = response.config.url.substr(response.config.url.indexOf("&t=") + 3);
                console.log('ERROR RETRIEVING INFO FOR ' + currentMovie);
              }
              else {
                $scope.movieInfo.push(response.data);   
                // $scope.movieInfo.Poster = response.data.Poster;         
              }
          })
      }
  }; 
  $scope.consoleLogMovies = function() {
    console.log($scope.movieInfo);
  }
  $scope.submitSingle = function(title){
          var requestUrl = 'http://www.omdbapi.com/?plot=full&t=' + title;
          $http.get(requestUrl).then(function(response){
            if(response.data.Error == "Movie not found!") {
              console.log('ERROR RETRIEVING INFO FOR ' + title);
            }
            else {
              $scope.currentMovie = response.data.Title;  
              $scope.currentURL = response.data.Poster;          
            }
          })
  }; 

});	