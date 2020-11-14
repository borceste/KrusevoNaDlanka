.\osmfilter.exe .\..\DataFiles\Krusevo.osm --keep="amenity=restaurant" | .\osmconvert64.exe - --all-to-nodes --csv="@id name @lat @lon" --csv-headline --csv-separator="," -o=".\..\DataFiles\restaurants.csv"

.\osmfilter.exe .\..\DataFiles\Krusevo.osm --keep="amenity=cafe" | .\osmconvert64.exe - --all-to-nodes --csv="@id name @lat @lon" --csv-headline --csv-separator="," -o=".\..\DataFiles\cafes.csv"

.\osmfilter.exe .\..\DataFiles\Krusevo.osm --keep="building=apartments" | .\osmconvert64.exe - --all-to-nodes --csv="@id name @lat @lon" --csv-headline --csv-separator="," -o=".\..\DataFiles\apartments.csv"

.\osmfilter.exe .\..\DataFiles\Krusevo.osm --keep="tourism=hotel" | .\osmconvert64.exe - --all-to-nodes --csv="@id name @lat @lon" --csv-headline --csv-separator="," -o=".\..\DataFiles\hotels.csv"