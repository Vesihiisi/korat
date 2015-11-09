 <?php
class CNav {
    public static function GenerateMenu($items) {
        $currentPage = basename($_SERVER['PHP_SELF']);
        $highlightClass = "here";
        $html = "<nav>";
        foreach($items as $key => $item) {
            $itemUrl = $item["url"];
            $itemText = $item["text"];
            if ($itemUrl == $currentPage) {
                $itemClass = $highlightClass;
            } else {
                $itemClass = null;
            }
            $html .= "<a href=$itemUrl class=$itemClass>$itemText</a>";
        }
        $html .= "</nav>";
        return $html;
  }
}; 
