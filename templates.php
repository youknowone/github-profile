<?
$openers = array(
    'xcode' => "$ open '%s.xcodeproj'",
    'xcworkspace' => "$ open '%s.xcworkspace'",
    'raw' => "## see '%s'",
);

$installers = array(
    'cocoapods' => array(
      'from' => 'Cocoapods',
      'instruction' => join("\n", array(
        '(First to meet Cocoapods: http://cocoapods.org/#install)',
        '$ echo "pod \'%s\'" >> Podfile',
        '$ pod install',
      )),
    ),
    'pypi' => array(
      'from' => 'PyPI',
      'instruction' => join("\n", array(
        "$ pip install '%s'",
      )),
    ),
);