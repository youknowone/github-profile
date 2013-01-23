<?
$user = array(
  'username' => 'youknowone',
  'name' => 'Jeong YunWon',
  'title' => 'Software Developer',
  'description' => '<p>I distribute some projects for hobby on github. This page generator is published on github too. See <a href="#github-profile">github-profile</a></p>',
  'postscript' => '<section><h3 id="cocoapod">Cocoapod available projects</h3>
  <p>Some of these are cocoapod available. After installing cocoapod, you can install and manage them with cocoapod command. Visit <a href="http://cocoapods.org">cocoapods.org</a> and follow their instructions.</p></section>
  ',
);
$projects = array(
  'XChat Azure' => array(
    'description' => 'An IRC client, OS X native front-end for XChat',
    'github' => 'xchataqua/xchataqua',
    'submodule' => True,
    'cocoapod' => True,
    'open' => array('type' => 'xcworkspace', 'file' => 'XChatAqua'),
    'links' => array(
      array('title' => 'Project page', 'link' => 'xchataqua.github.com'),
    ),
    'downloads' => array(
      array('title' => 'Appstore', 'link' => 'http://itunes.apple.com/app/id447521961', 'download' => 'Download From'),
      array('title' => 'Package', 'link' => 'https://github.com/xchataqua/xchataqua/downloads'),
    ),
  ),
  '구름 입력기' => array(
    'description' => 'OS X를 위한 새로운 한글 입력기. 편리하게, 가볍게, 자유롭게.',
    'github' => 'gureum/gureum',
    'submodule' => True,
    'open' => array('type' => 'xcode', 'file' => 'CharmIM'),
    'links' => array(
      array('title' => 'Project page', 'link' => 'gureum.org'),
    ),
    'downloads' => array(
      array('title' => 'Package', 'link' => 'http://bi.gureum.org'),
    ),
  ),
  'Visual JSON' => array(
    'description' => 'JSON pretty-viewer for OS X.',
    'github' => 'youknowone/VisualJSON',
    'submodule' => True,
    'cocoapod' => True,
    'open' => array('type' => 'xcworkspace', 'file' => 'VisualJSON'),
    'links' => array(
      array('title' => 'Project page', 'link' => 'youknowone.github.com/VisualJSON'),
    ),
    'downloads' => array(
      array('title' => 'Appstore', 'link' => 'http://itunes.apple.com/app/id488709442', 'download' => 'Download from'),
      array('title' => 'Package', 'link' => 'https://github.com/youknowone/VisualJSON/downloads'),
    ),
  ),
  'Writedown!' => array(
    'description' => 'Markdown editor with preview for OS X',
    'github' => 'youknowone/writedown',
    'cocoapod' => True,
    'open' => array('type' => 'xcworkspace', 'file' => 'Writedown'),
    'downloads' => array(
      array('title' => 'Appstore', 'link' => 'https://itunes.apple.com/app/id574184591'),
      array('title' => 'Package', 'link' => 'https://github.com/youknowone/writedown/downloads'),
    ),
  ),
  'FoundationExtension' => array(
    'description' => 'Foundation/Cocoa/UIKit extension kit',
    'github' => 'youknowone/FoundationExtension',
    'submodule' => True,
    'open' => array('type' => 'xcode', 'file' => 'FoundationExtension'),
    'links' => array(
      array('title' => 'Document', 'link' => 'youknowone.github.com/FoundationExtension'),
    ),
    'downloads' => array(
      array('title' => 'Github', 'link' => 'http://youknowone.github.com/FoundationExtension/#Download', 'download' => 'Clone from'),
      array('title' => 'Cocoapods', 'link' => '#cocoapod', 'download' => 'Pod from'),
    ),
  ),
  'QRQR' => array(
    'description' => 'Simple QR code decoder',
    'github' => 'youknowone/QRQR',
    'minor' => 'True',
    'cocoapod' => True,
    'open' => array('type' => 'xcworkspace', 'file' => 'QRQR'),
    'downloads' => array(
      array('title' => 'Appstore', 'link' => 'https://itunes.apple.com/app/id444076697'),
    ),
  ),
  'cdebug' => array(
    'description' => 'Debug mode log/assertion for C/Objective-C in a file',
    'github' => 'youknowone/cdebug',
    'minor' => True,
    'open' => array('type' => 'raw', 'file' => 'debug.h'),
    'links' => array(
      array('title' => 'Document', 'link' => 'youknowone.github.com/cdebug'),
    ),
    'downloads' => array(
      array('title' => 'File', 'link' => 'https://github.com/youknowone/cdebug/blob/master/debug.h'),
      array('title' => 'Cocoapods', 'link' => '#cocoapod', 'download' => 'Pod from'),
    ),
  ),
  'prettyexc' => array(
    'description' => 'Human readable exception for Python',
    'github' => 'youknowone/prettyexc',
    'minor' => True,
    'downloads' => array(
      array('title' => 'PyPI', 'link' => 'http://pypi.python.org/pypi/prettyexc'),
    ),
  ),
  'cacheobj' => array(
    'description' => 'Composable Object-Property interface for any cache storage.',
    'github' => 'youknowone/cacheobj',
    'minor' => True,
    'downloads' => array(
      array('title' => 'PyPI', 'link' => 'http://pypi.python.org/pypi/cacheobj'),
    ),
  ),
  'xcodepkgtool' => array(
    'description' => 'Simple .pkg deployment script for xcode OS X project.',
    'github' => 'youknowone/xcodepkgtool',
    'minor' => True,
    'open' => array('type' => 'raw', 'file' => 'settings.sh.example'),
  ),
  'ObjectXML' => array(
    'description' => 'Simple XML object model for Objective-C using NSXMLParser',
    'github' => 'youknowone/ObjectXML',
    'minor' => True,
    'submodule' => True,
    'open' => array('type' => 'xcode', 'file' => 'ObjectXML'),
    'downloads' => array(
      array('title' => 'Cocoapods', 'link' => '#cocoapod', 'download' => 'Pod from'),
    ),
  ),
  'hangulize for iOS' => array(
    'description' => 'iOS frontend for http://hangulize.org',
    'github' => 'youknowone/hangulize-ios',
    'minor' => True,
    'cocoapod' => True,
    'open' => array('type' => 'xcode', 'file' => 'Hangulize'),
    'downloads' => array(
      array('title' => 'Appstore', 'link' => 'https://itunes.apple.com/app/id418530537', 'download' => 'Download from'),
    ),
  ),
  'github-profile' => array(
    'description' => 'Github profile generator by manually written data.',
    'longdescription' => 'This project is also used to build this page.',
    'github' => 'youknowone/github-profile',
    'minor' => True,
    'open' => array('type' => 'edit & make', 'file' => 'data.php'),
    'links' => array(
      array('title' => 'Example', 'link' => 'youknowone.github.com/github-profile'),
    ),
  ),
  'itunes-iap' => array(
    'description' => 'Itunes In-app Purchase verification API wrapper',
    'github' => 'youknowone/itunes-iap',
    'minor' => True,
    'downloads' => array(
      array('title' => 'PyPI', 'link' => 'http://pypi.python.org/pypi/itunes-iap'),
    ),
  ),
  'libintl-alternative' => array(
    'description' => 'libintl alternative implementation to replace it with NSBundle for OS X / iOS',
    'github' => 'youknowone/libintl-alternative',
    'minor' => True,
    'open' => array('type' => 'xcode', 'file' => 'libintl'),
    'links' => array(
      array('title' => 'Document', 'link' => 'youknowone.github.com/libintl-alternative'),
    ),
    'downloads' => array(
      array('title' => 'Cocoapods', 'link' => '#cocoapod', 'download' => 'Pod from'),
    ),
  ),
  'pythun' => array(
    'description' => 'Pythun(<-PYTHon UNindented is indent-insensitive python dialect, just for fun)',
    'github' => 'youknowone/pythun',
    'minor' => True,
  ),
  '조선 사진기' => array(
    'description' => '뭐든지 북한산으로 만들어 주는 유용한 사진기',
    'github' => 'youknowone/JoseonCamera',
    'minor' => True,
    'submodule' => True,
    'open' => array('type' => 'xcode', 'file' => 'JoseonCamera'),
    'downloads' => array(
      array('title' => 'Appstore', 'link' => 'https://itunes.apple.com/app/id374201131'),
    ),
  ),
  '농협 서버 체험판' => array(
    'description' => '농협 서버 체험판에서는 농협 서버 가상 터미널에서 농협 서버의 보안 정책을 간단하게 체험해 볼 수 있습니다.',
    'github' => 'youknowone/nonghyeop',
    'minor' => True,
    'open' => array('type' => 'raw', 'file' => 'index.html'),
    'links' => array(
      array('title' => 'Terminal', 'link' => 'youknowone.github.com/nonghyeop'),
    ),
  ),
);

$openers = array(
    'xcode' => "$ open '%s.xcodeproj'",
    'xcworkspace' => "$ open '%s.xcworkspace'",
    'raw' => "$ see '%s'",
);