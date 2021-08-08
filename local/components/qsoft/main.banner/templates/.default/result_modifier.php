<?

$arImg = [];

for ($i = 0; $i < count($arResult["BANNERS_PROPERTIES"]); $i++) {
    $arImg[] = $arResult["BANNERS_PROPERTIES"][$i]["IMAGE_ID"];
}

$rsImg = CFile::GetList([], ["@ID" => implode(",", $arImg)]);

while ($img = $rsImg->GetNext()) {
    $path = CFile::GetFileSRC($img);

    foreach ($arResult["BANNERS_PROPERTIES"] as &$arItem) {
        if (! strcmp($arItem["IMAGE_ID"], $img["ID"])) {
            $arItem["IMAGE_SRC"] = $path;
        }
    }

}

