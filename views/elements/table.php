<!-- component -->
<div class="flex flex-col">
  <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full">

          <thead class="bg-slate-900 border-b">
            <tr>

              <th scope="col" class="text-sm font-medium text-gray-200 px-6 py-4 text-center">
                Artist
              </th>

              <th scope="col" class="text-sm font-medium text-gray-200 px-6 py-4 text-center">
                Song
              </th>

              <th scope="col" class="text-sm font-medium text-gray-200 px-6 py-4 text-center">
                Type
              </th>

              <th scope="col" class="text-sm font-medium text-gray-200 px-6 py-4 text-center">
                Sampled Artist
              </th>

              <th scope="col" class="text-sm font-medium text-gray-200 px-6 py-4 text-center">
                Sampled Song
              </th>

              <th scope="col" class="text-sm font-medium text-gray-200 px-6 py-4 text-center">
                View more
              </th>

            </tr>
          </thead>
          
          <tbody>
            <?php

            /**
             * The only way to make alternating row colours that make sense to me right now.
             * imageLookup allows me to easily display images while artistLookup binds the 
             * colour of background and text to the corresponding artist.
             */
            $imageLookup = [
              'reprise' => 'images/reprise.png',
              'drums' => 'images/drums.png',
              'quote' => 'images/quote.png',
              'sample' => 'images/sample.png',
              'info' => 'images/view.png'
            ];
          
            $artistLookup = [
              'Antoine Cami' => 'bg-amber-200 text-gray-900',
              'Bobzz' => 'bg-emerald-300 text-gray-900',
              'Bezinho' => 'bg-purple-600 text-gray-200',
            ];

            $stylingClass = 'class="text-sm text-center px-6 py-4 whitespace-normal"';
          
            foreach ($samples as $row) {
              $bgImage = $imageLookup[$row['sample_type']];
              $bgClass = $artistLookup[$row['artist_name']];
          
              echo '<tr class="' . $bgClass . ' border-b">';
              echo '<td '. $stylingClass .'>' . $row['artist_name'] . '</td>';
              echo '<td '. $stylingClass .'>' . $row['song_name'] . '</td>';
              echo '<td '. $stylingClass .'> <img src="'. $bgImage . '" width="24" height="24"></td>';
              echo '<td '. $stylingClass .'>' . $row['sampled_artist'] . '</td>';
              echo '<td '. $stylingClass .'>' . $row['sampled_song'] . '</td>';
              echo '<td ' . $stylingClass . '><a href="/sample?id=' . $row['sample_id'] . '"><img src="' . $imageLookup['info'] . '" width="24" height="24" class="center"></a></td>';
              echo '</tr>';
            }

            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
