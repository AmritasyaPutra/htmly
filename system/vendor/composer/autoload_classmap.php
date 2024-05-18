<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname(dirname($vendorDir));

return array(
    'BaconQrCode\\Common\\BitArray' => $vendorDir . '/bacon/bacon-qr-code/src/Common/BitArray.php',
    'BaconQrCode\\Common\\BitMatrix' => $vendorDir . '/bacon/bacon-qr-code/src/Common/BitMatrix.php',
    'BaconQrCode\\Common\\BitUtils' => $vendorDir . '/bacon/bacon-qr-code/src/Common/BitUtils.php',
    'BaconQrCode\\Common\\CharacterSetEci' => $vendorDir . '/bacon/bacon-qr-code/src/Common/CharacterSetEci.php',
    'BaconQrCode\\Common\\EcBlock' => $vendorDir . '/bacon/bacon-qr-code/src/Common/EcBlock.php',
    'BaconQrCode\\Common\\EcBlocks' => $vendorDir . '/bacon/bacon-qr-code/src/Common/EcBlocks.php',
    'BaconQrCode\\Common\\ErrorCorrectionLevel' => $vendorDir . '/bacon/bacon-qr-code/src/Common/ErrorCorrectionLevel.php',
    'BaconQrCode\\Common\\FormatInformation' => $vendorDir . '/bacon/bacon-qr-code/src/Common/FormatInformation.php',
    'BaconQrCode\\Common\\Mode' => $vendorDir . '/bacon/bacon-qr-code/src/Common/Mode.php',
    'BaconQrCode\\Common\\ReedSolomonCodec' => $vendorDir . '/bacon/bacon-qr-code/src/Common/ReedSolomonCodec.php',
    'BaconQrCode\\Common\\Version' => $vendorDir . '/bacon/bacon-qr-code/src/Common/Version.php',
    'BaconQrCode\\Encoder\\BlockPair' => $vendorDir . '/bacon/bacon-qr-code/src/Encoder/BlockPair.php',
    'BaconQrCode\\Encoder\\ByteMatrix' => $vendorDir . '/bacon/bacon-qr-code/src/Encoder/ByteMatrix.php',
    'BaconQrCode\\Encoder\\Encoder' => $vendorDir . '/bacon/bacon-qr-code/src/Encoder/Encoder.php',
    'BaconQrCode\\Encoder\\MaskUtil' => $vendorDir . '/bacon/bacon-qr-code/src/Encoder/MaskUtil.php',
    'BaconQrCode\\Encoder\\MatrixUtil' => $vendorDir . '/bacon/bacon-qr-code/src/Encoder/MatrixUtil.php',
    'BaconQrCode\\Encoder\\QrCode' => $vendorDir . '/bacon/bacon-qr-code/src/Encoder/QrCode.php',
    'BaconQrCode\\Exception\\ExceptionInterface' => $vendorDir . '/bacon/bacon-qr-code/src/Exception/ExceptionInterface.php',
    'BaconQrCode\\Exception\\InvalidArgumentException' => $vendorDir . '/bacon/bacon-qr-code/src/Exception/InvalidArgumentException.php',
    'BaconQrCode\\Exception\\OutOfBoundsException' => $vendorDir . '/bacon/bacon-qr-code/src/Exception/OutOfBoundsException.php',
    'BaconQrCode\\Exception\\RuntimeException' => $vendorDir . '/bacon/bacon-qr-code/src/Exception/RuntimeException.php',
    'BaconQrCode\\Exception\\UnexpectedValueException' => $vendorDir . '/bacon/bacon-qr-code/src/Exception/UnexpectedValueException.php',
    'BaconQrCode\\Exception\\WriterException' => $vendorDir . '/bacon/bacon-qr-code/src/Exception/WriterException.php',
    'BaconQrCode\\Renderer\\Color\\Alpha' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/Color/Alpha.php',
    'BaconQrCode\\Renderer\\Color\\Cmyk' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/Color/Cmyk.php',
    'BaconQrCode\\Renderer\\Color\\ColorInterface' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/Color/ColorInterface.php',
    'BaconQrCode\\Renderer\\Color\\Gray' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/Color/Gray.php',
    'BaconQrCode\\Renderer\\Color\\Rgb' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/Color/Rgb.php',
    'BaconQrCode\\Renderer\\Eye\\CompositeEye' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/Eye/CompositeEye.php',
    'BaconQrCode\\Renderer\\Eye\\EyeInterface' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/Eye/EyeInterface.php',
    'BaconQrCode\\Renderer\\Eye\\ModuleEye' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/Eye/ModuleEye.php',
    'BaconQrCode\\Renderer\\Eye\\PointyEye' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/Eye/PointyEye.php',
    'BaconQrCode\\Renderer\\Eye\\SimpleCircleEye' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/Eye/SimpleCircleEye.php',
    'BaconQrCode\\Renderer\\Eye\\SquareEye' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/Eye/SquareEye.php',
    'BaconQrCode\\Renderer\\GDLibRenderer' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/GDLibRenderer.php',
    'BaconQrCode\\Renderer\\ImageRenderer' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/ImageRenderer.php',
    'BaconQrCode\\Renderer\\Image\\EpsImageBackEnd' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/Image/EpsImageBackEnd.php',
    'BaconQrCode\\Renderer\\Image\\ImageBackEndInterface' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/Image/ImageBackEndInterface.php',
    'BaconQrCode\\Renderer\\Image\\ImagickImageBackEnd' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/Image/ImagickImageBackEnd.php',
    'BaconQrCode\\Renderer\\Image\\SvgImageBackEnd' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/Image/SvgImageBackEnd.php',
    'BaconQrCode\\Renderer\\Image\\TransformationMatrix' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/Image/TransformationMatrix.php',
    'BaconQrCode\\Renderer\\Module\\DotsModule' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/Module/DotsModule.php',
    'BaconQrCode\\Renderer\\Module\\EdgeIterator\\Edge' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/Module/EdgeIterator/Edge.php',
    'BaconQrCode\\Renderer\\Module\\EdgeIterator\\EdgeIterator' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/Module/EdgeIterator/EdgeIterator.php',
    'BaconQrCode\\Renderer\\Module\\ModuleInterface' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/Module/ModuleInterface.php',
    'BaconQrCode\\Renderer\\Module\\RoundnessModule' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/Module/RoundnessModule.php',
    'BaconQrCode\\Renderer\\Module\\SquareModule' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/Module/SquareModule.php',
    'BaconQrCode\\Renderer\\Path\\Close' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/Path/Close.php',
    'BaconQrCode\\Renderer\\Path\\Curve' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/Path/Curve.php',
    'BaconQrCode\\Renderer\\Path\\EllipticArc' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/Path/EllipticArc.php',
    'BaconQrCode\\Renderer\\Path\\Line' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/Path/Line.php',
    'BaconQrCode\\Renderer\\Path\\Move' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/Path/Move.php',
    'BaconQrCode\\Renderer\\Path\\OperationInterface' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/Path/OperationInterface.php',
    'BaconQrCode\\Renderer\\Path\\Path' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/Path/Path.php',
    'BaconQrCode\\Renderer\\PlainTextRenderer' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/PlainTextRenderer.php',
    'BaconQrCode\\Renderer\\RendererInterface' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/RendererInterface.php',
    'BaconQrCode\\Renderer\\RendererStyle\\EyeFill' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/RendererStyle/EyeFill.php',
    'BaconQrCode\\Renderer\\RendererStyle\\Fill' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/RendererStyle/Fill.php',
    'BaconQrCode\\Renderer\\RendererStyle\\Gradient' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/RendererStyle/Gradient.php',
    'BaconQrCode\\Renderer\\RendererStyle\\GradientType' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/RendererStyle/GradientType.php',
    'BaconQrCode\\Renderer\\RendererStyle\\RendererStyle' => $vendorDir . '/bacon/bacon-qr-code/src/Renderer/RendererStyle/RendererStyle.php',
    'BaconQrCode\\Writer' => $vendorDir . '/bacon/bacon-qr-code/src/Writer.php',
    'Composer\\CaBundle\\CaBundle' => $vendorDir . '/composer/ca-bundle/src/CaBundle.php',
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'DASPRiD\\Enum\\AbstractEnum' => $vendorDir . '/dasprid/enum/src/AbstractEnum.php',
    'DASPRiD\\Enum\\EnumMap' => $vendorDir . '/dasprid/enum/src/EnumMap.php',
    'DASPRiD\\Enum\\Exception\\CloneNotSupportedException' => $vendorDir . '/dasprid/enum/src/Exception/CloneNotSupportedException.php',
    'DASPRiD\\Enum\\Exception\\ExceptionInterface' => $vendorDir . '/dasprid/enum/src/Exception/ExceptionInterface.php',
    'DASPRiD\\Enum\\Exception\\ExpectationException' => $vendorDir . '/dasprid/enum/src/Exception/ExpectationException.php',
    'DASPRiD\\Enum\\Exception\\IllegalArgumentException' => $vendorDir . '/dasprid/enum/src/Exception/IllegalArgumentException.php',
    'DASPRiD\\Enum\\Exception\\MismatchException' => $vendorDir . '/dasprid/enum/src/Exception/MismatchException.php',
    'DASPRiD\\Enum\\Exception\\SerializeNotSupportedException' => $vendorDir . '/dasprid/enum/src/Exception/SerializeNotSupportedException.php',
    'DASPRiD\\Enum\\Exception\\UnserializeNotSupportedException' => $vendorDir . '/dasprid/enum/src/Exception/UnserializeNotSupportedException.php',
    'DASPRiD\\Enum\\NullValue' => $vendorDir . '/dasprid/enum/src/NullValue.php',
    'Kanti\\CacheOneFile' => $vendorDir . '/kanti/hub-updater/src/CacheOneFile.php',
    'Kanti\\HubUpdater' => $vendorDir . '/kanti/hub-updater/src/HubUpdater.php',
    'Michelf\\Markdown' => $vendorDir . '/michelf/php-markdown/Michelf/Markdown.php',
    'Michelf\\MarkdownExtra' => $vendorDir . '/michelf/php-markdown/Michelf/MarkdownExtra.php',
    'Michelf\\MarkdownInterface' => $vendorDir . '/michelf/php-markdown/Michelf/MarkdownInterface.php',
    'ParagonIE\\ConstantTime\\Base32' => $vendorDir . '/paragonie/constant_time_encoding/src/Base32.php',
    'ParagonIE\\ConstantTime\\Base32Hex' => $vendorDir . '/paragonie/constant_time_encoding/src/Base32Hex.php',
    'ParagonIE\\ConstantTime\\Base64' => $vendorDir . '/paragonie/constant_time_encoding/src/Base64.php',
    'ParagonIE\\ConstantTime\\Base64DotSlash' => $vendorDir . '/paragonie/constant_time_encoding/src/Base64DotSlash.php',
    'ParagonIE\\ConstantTime\\Base64DotSlashOrdered' => $vendorDir . '/paragonie/constant_time_encoding/src/Base64DotSlashOrdered.php',
    'ParagonIE\\ConstantTime\\Base64UrlSafe' => $vendorDir . '/paragonie/constant_time_encoding/src/Base64UrlSafe.php',
    'ParagonIE\\ConstantTime\\Binary' => $vendorDir . '/paragonie/constant_time_encoding/src/Binary.php',
    'ParagonIE\\ConstantTime\\EncoderInterface' => $vendorDir . '/paragonie/constant_time_encoding/src/EncoderInterface.php',
    'ParagonIE\\ConstantTime\\Encoding' => $vendorDir . '/paragonie/constant_time_encoding/src/Encoding.php',
    'ParagonIE\\ConstantTime\\Hex' => $vendorDir . '/paragonie/constant_time_encoding/src/Hex.php',
    'ParagonIE\\ConstantTime\\RFC4648' => $vendorDir . '/paragonie/constant_time_encoding/src/RFC4648.php',
    'PragmaRX\\Google2FA\\Exceptions\\Contracts\\Google2FA' => $vendorDir . '/pragmarx/google2fa/src/Exceptions/Contracts/Google2FA.php',
    'PragmaRX\\Google2FA\\Exceptions\\Contracts\\IncompatibleWithGoogleAuthenticator' => $vendorDir . '/pragmarx/google2fa/src/Exceptions/Contracts/IncompatibleWithGoogleAuthenticator.php',
    'PragmaRX\\Google2FA\\Exceptions\\Contracts\\InvalidAlgorithm' => $vendorDir . '/pragmarx/google2fa/src/Exceptions/Contracts/InvalidAlgorithm.php',
    'PragmaRX\\Google2FA\\Exceptions\\Contracts\\InvalidCharacters' => $vendorDir . '/pragmarx/google2fa/src/Exceptions/Contracts/InvalidCharacters.php',
    'PragmaRX\\Google2FA\\Exceptions\\Contracts\\SecretKeyTooShort' => $vendorDir . '/pragmarx/google2fa/src/Exceptions/Contracts/SecretKeyTooShort.php',
    'PragmaRX\\Google2FA\\Exceptions\\Google2FAException' => $vendorDir . '/pragmarx/google2fa/src/Exceptions/Google2FAException.php',
    'PragmaRX\\Google2FA\\Exceptions\\IncompatibleWithGoogleAuthenticatorException' => $vendorDir . '/pragmarx/google2fa/src/Exceptions/IncompatibleWithGoogleAuthenticatorException.php',
    'PragmaRX\\Google2FA\\Exceptions\\InvalidAlgorithmException' => $vendorDir . '/pragmarx/google2fa/src/Exceptions/InvalidAlgorithmException.php',
    'PragmaRX\\Google2FA\\Exceptions\\InvalidCharactersException' => $vendorDir . '/pragmarx/google2fa/src/Exceptions/InvalidCharactersException.php',
    'PragmaRX\\Google2FA\\Exceptions\\SecretKeyTooShortException' => $vendorDir . '/pragmarx/google2fa/src/Exceptions/SecretKeyTooShortException.php',
    'PragmaRX\\Google2FA\\Google2FA' => $vendorDir . '/pragmarx/google2fa/src/Google2FA.php',
    'PragmaRX\\Google2FA\\Support\\Base32' => $vendorDir . '/pragmarx/google2fa/src/Support/Base32.php',
    'PragmaRX\\Google2FA\\Support\\Constants' => $vendorDir . '/pragmarx/google2fa/src/Support/Constants.php',
    'PragmaRX\\Google2FA\\Support\\QRCode' => $vendorDir . '/pragmarx/google2fa/src/Support/QRCode.php',
    'Suin\\RSSWriter\\Channel' => $vendorDir . '/suin/php-rss-writer/src/Suin/RSSWriter/Channel.php',
    'Suin\\RSSWriter\\ChannelInterface' => $vendorDir . '/suin/php-rss-writer/src/Suin/RSSWriter/ChannelInterface.php',
    'Suin\\RSSWriter\\Feed' => $vendorDir . '/suin/php-rss-writer/src/Suin/RSSWriter/Feed.php',
    'Suin\\RSSWriter\\FeedInterface' => $vendorDir . '/suin/php-rss-writer/src/Suin/RSSWriter/FeedInterface.php',
    'Suin\\RSSWriter\\Item' => $vendorDir . '/suin/php-rss-writer/src/Suin/RSSWriter/Item.php',
    'Suin\\RSSWriter\\ItemInterface' => $vendorDir . '/suin/php-rss-writer/src/Suin/RSSWriter/ItemInterface.php',
    'Suin\\RSSWriter\\SimpleXMLElement' => $vendorDir . '/suin/php-rss-writer/src/Suin/RSSWriter/SimpleXMLElement.php',
    'URLify' => $vendorDir . '/jbroadway/urlify/URLify.php',
    'voku\\helper\\ASCII' => $vendorDir . '/voku/portable-ascii/src/voku/helper/ASCII.php',
    'voku\\helper\\StopWords' => $vendorDir . '/voku/stop-words/src/voku/helper/StopWords.php',
    'voku\\helper\\StopWordsLanguageNotExists' => $vendorDir . '/voku/stop-words/src/voku/helper/StopWordsLanguageNotExists.php',
);
