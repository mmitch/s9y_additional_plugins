<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbff66b1076919b6333f2c7a27bd72760
{
    public static $files = array (
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Portier\\Client\\' => 15,
        ),
        'L' => 
        array (
            'Lcobucci\\JWT\\' => 13,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'F' => 
        array (
            'FG\\' => 3,
        ),
        'B' => 
        array (
            'Base64Url\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Portier\\Client\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Lcobucci\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/lcobucci/jwt/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'FG\\' => 
        array (
            0 => __DIR__ . '/..' . '/fgrosse/phpasn1/lib',
        ),
        'Base64Url\\' => 
        array (
            0 => __DIR__ . '/..' . '/spomky-labs/base64url/src',
        ),
    );

    public static $classMap = array (
        'Base64Url\\Base64Url' => __DIR__ . '/..' . '/spomky-labs/base64url/src/Base64Url.php',
        'FG\\ASN1\\AbstractString' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/AbstractString.php',
        'FG\\ASN1\\AbstractTime' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/AbstractTime.php',
        'FG\\ASN1\\Base128' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Base128.php',
        'FG\\ASN1\\Composite\\AttributeTypeAndValue' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Composite/AttributeTypeAndValue.php',
        'FG\\ASN1\\Composite\\RDNString' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Composite/RDNString.php',
        'FG\\ASN1\\Composite\\RelativeDistinguishedName' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Composite/RelativeDistinguishedName.php',
        'FG\\ASN1\\Construct' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Construct.php',
        'FG\\ASN1\\Exception\\NotImplementedException' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Exception/NotImplementedException.php',
        'FG\\ASN1\\Exception\\ParserException' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Exception/ParserException.php',
        'FG\\ASN1\\ExplicitlyTaggedObject' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/ExplicitlyTaggedObject.php',
        'FG\\ASN1\\Identifier' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Identifier.php',
        'FG\\ASN1\\OID' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/OID.php',
        'FG\\ASN1\\Object' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Object.php',
        'FG\\ASN1\\Parsable' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Parsable.php',
        'FG\\ASN1\\TemplateParser' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/TemplateParser.php',
        'FG\\ASN1\\Universal\\BMPString' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Universal/BMPString.php',
        'FG\\ASN1\\Universal\\BitString' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Universal/BitString.php',
        'FG\\ASN1\\Universal\\Boolean' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Universal/Boolean.php',
        'FG\\ASN1\\Universal\\CharacterString' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Universal/CharacterString.php',
        'FG\\ASN1\\Universal\\Enumerated' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Universal/Enumerated.php',
        'FG\\ASN1\\Universal\\GeneralString' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Universal/GeneralString.php',
        'FG\\ASN1\\Universal\\GeneralizedTime' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Universal/GeneralizedTime.php',
        'FG\\ASN1\\Universal\\GraphicString' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Universal/GraphicString.php',
        'FG\\ASN1\\Universal\\IA5String' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Universal/IA5String.php',
        'FG\\ASN1\\Universal\\Integer' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Universal/Integer.php',
        'FG\\ASN1\\Universal\\Null' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Universal/Null.php',
        'FG\\ASN1\\Universal\\NullObject' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Universal/NullObject.php',
        'FG\\ASN1\\Universal\\NumericString' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Universal/NumericString.php',
        'FG\\ASN1\\Universal\\ObjectDescriptor' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Universal/ObjectDescriptor.php',
        'FG\\ASN1\\Universal\\ObjectIdentifier' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Universal/ObjectIdentifier.php',
        'FG\\ASN1\\Universal\\OctetString' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Universal/OctetString.php',
        'FG\\ASN1\\Universal\\PrintableString' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Universal/PrintableString.php',
        'FG\\ASN1\\Universal\\RelativeObjectIdentifier' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Universal/RelativeObjectIdentifier.php',
        'FG\\ASN1\\Universal\\Sequence' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Universal/Sequence.php',
        'FG\\ASN1\\Universal\\Set' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Universal/Set.php',
        'FG\\ASN1\\Universal\\T61String' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Universal/T61String.php',
        'FG\\ASN1\\Universal\\UTCTime' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Universal/UTCTime.php',
        'FG\\ASN1\\Universal\\UTF8String' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Universal/UTF8String.php',
        'FG\\ASN1\\Universal\\UniversalString' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Universal/UniversalString.php',
        'FG\\ASN1\\Universal\\VisibleString' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/Universal/VisibleString.php',
        'FG\\ASN1\\UnknownConstructedObject' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/UnknownConstructedObject.php',
        'FG\\ASN1\\UnknownObject' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/ASN1/UnknownObject.php',
        'FG\\X509\\AlgorithmIdentifier' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/X509/AlgorithmIdentifier.php',
        'FG\\X509\\CSR\\Attributes' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/X509/CSR/Attributes.php',
        'FG\\X509\\CSR\\CSR' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/X509/CSR/CSR.php',
        'FG\\X509\\CertificateExtensions' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/X509/CertificateExtensions.php',
        'FG\\X509\\CertificateSubject' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/X509/CertificateSubject.php',
        'FG\\X509\\PrivateKey' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/X509/PrivateKey.php',
        'FG\\X509\\PublicKey' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/X509/PublicKey.php',
        'FG\\X509\\SAN\\DNSName' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/X509/SAN/DNSName.php',
        'FG\\X509\\SAN\\IPAddress' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/X509/SAN/IPAddress.php',
        'FG\\X509\\SAN\\SubjectAlternativeNames' => __DIR__ . '/..' . '/fgrosse/phpasn1/lib/X509/SAN/SubjectAlternativeNames.php',
        'GuzzleHttp\\Client' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Client.php',
        'GuzzleHttp\\ClientInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ClientInterface.php',
        'GuzzleHttp\\Cookie\\CookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJar.php',
        'GuzzleHttp\\Cookie\\CookieJarInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php',
        'GuzzleHttp\\Cookie\\FileCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php',
        'GuzzleHttp\\Cookie\\SessionCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php',
        'GuzzleHttp\\Cookie\\SetCookie' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SetCookie.php',
        'GuzzleHttp\\Exception\\BadResponseException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/BadResponseException.php',
        'GuzzleHttp\\Exception\\ClientException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ClientException.php',
        'GuzzleHttp\\Exception\\ConnectException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ConnectException.php',
        'GuzzleHttp\\Exception\\GuzzleException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/GuzzleException.php',
        'GuzzleHttp\\Exception\\RequestException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/RequestException.php',
        'GuzzleHttp\\Exception\\SeekException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/SeekException.php',
        'GuzzleHttp\\Exception\\ServerException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ServerException.php',
        'GuzzleHttp\\Exception\\TooManyRedirectsException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php',
        'GuzzleHttp\\Exception\\TransferException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TransferException.php',
        'GuzzleHttp\\HandlerStack' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/HandlerStack.php',
        'GuzzleHttp\\Handler\\CurlFactory' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactory.php',
        'GuzzleHttp\\Handler\\CurlFactoryInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactoryInterface.php',
        'GuzzleHttp\\Handler\\CurlHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlHandler.php',
        'GuzzleHttp\\Handler\\CurlMultiHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlMultiHandler.php',
        'GuzzleHttp\\Handler\\EasyHandle' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/EasyHandle.php',
        'GuzzleHttp\\Handler\\MockHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/MockHandler.php',
        'GuzzleHttp\\Handler\\Proxy' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/Proxy.php',
        'GuzzleHttp\\Handler\\StreamHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/StreamHandler.php',
        'GuzzleHttp\\MessageFormatter' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/MessageFormatter.php',
        'GuzzleHttp\\Middleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Middleware.php',
        'GuzzleHttp\\Pool' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Pool.php',
        'GuzzleHttp\\PrepareBodyMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php',
        'GuzzleHttp\\Promise\\AggregateException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/AggregateException.php',
        'GuzzleHttp\\Promise\\CancellationException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/CancellationException.php',
        'GuzzleHttp\\Promise\\Coroutine' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Coroutine.php',
        'GuzzleHttp\\Promise\\EachPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/EachPromise.php',
        'GuzzleHttp\\Promise\\FulfilledPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/FulfilledPromise.php',
        'GuzzleHttp\\Promise\\Promise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Promise.php',
        'GuzzleHttp\\Promise\\PromiseInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromiseInterface.php',
        'GuzzleHttp\\Promise\\PromisorInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromisorInterface.php',
        'GuzzleHttp\\Promise\\RejectedPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectedPromise.php',
        'GuzzleHttp\\Promise\\RejectionException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectionException.php',
        'GuzzleHttp\\Promise\\TaskQueue' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueue.php',
        'GuzzleHttp\\Promise\\TaskQueueInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueueInterface.php',
        'GuzzleHttp\\Psr7\\AppendStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/AppendStream.php',
        'GuzzleHttp\\Psr7\\BufferStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/BufferStream.php',
        'GuzzleHttp\\Psr7\\CachingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/CachingStream.php',
        'GuzzleHttp\\Psr7\\DroppingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/DroppingStream.php',
        'GuzzleHttp\\Psr7\\FnStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/FnStream.php',
        'GuzzleHttp\\Psr7\\InflateStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/InflateStream.php',
        'GuzzleHttp\\Psr7\\LazyOpenStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LazyOpenStream.php',
        'GuzzleHttp\\Psr7\\LimitStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LimitStream.php',
        'GuzzleHttp\\Psr7\\MessageTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MessageTrait.php',
        'GuzzleHttp\\Psr7\\MultipartStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MultipartStream.php',
        'GuzzleHttp\\Psr7\\NoSeekStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/NoSeekStream.php',
        'GuzzleHttp\\Psr7\\PumpStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/PumpStream.php',
        'GuzzleHttp\\Psr7\\Request' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Request.php',
        'GuzzleHttp\\Psr7\\Response' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Response.php',
        'GuzzleHttp\\Psr7\\ServerRequest' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/ServerRequest.php',
        'GuzzleHttp\\Psr7\\Stream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Stream.php',
        'GuzzleHttp\\Psr7\\StreamDecoratorTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamDecoratorTrait.php',
        'GuzzleHttp\\Psr7\\StreamWrapper' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamWrapper.php',
        'GuzzleHttp\\Psr7\\UploadedFile' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UploadedFile.php',
        'GuzzleHttp\\Psr7\\Uri' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Uri.php',
        'GuzzleHttp\\RedirectMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RedirectMiddleware.php',
        'GuzzleHttp\\RequestOptions' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RequestOptions.php',
        'GuzzleHttp\\RetryMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RetryMiddleware.php',
        'GuzzleHttp\\TransferStats' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/TransferStats.php',
        'GuzzleHttp\\UriTemplate' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/UriTemplate.php',
        'Lcobucci\\JWT\\Builder' => __DIR__ . '/..' . '/lcobucci/jwt/src/Builder.php',
        'Lcobucci\\JWT\\Claim' => __DIR__ . '/..' . '/lcobucci/jwt/src/Claim.php',
        'Lcobucci\\JWT\\Claim\\Basic' => __DIR__ . '/..' . '/lcobucci/jwt/src/Claim/Basic.php',
        'Lcobucci\\JWT\\Claim\\EqualsTo' => __DIR__ . '/..' . '/lcobucci/jwt/src/Claim/EqualsTo.php',
        'Lcobucci\\JWT\\Claim\\Factory' => __DIR__ . '/..' . '/lcobucci/jwt/src/Claim/Factory.php',
        'Lcobucci\\JWT\\Claim\\GreaterOrEqualsTo' => __DIR__ . '/..' . '/lcobucci/jwt/src/Claim/GreaterOrEqualsTo.php',
        'Lcobucci\\JWT\\Claim\\LesserOrEqualsTo' => __DIR__ . '/..' . '/lcobucci/jwt/src/Claim/LesserOrEqualsTo.php',
        'Lcobucci\\JWT\\Claim\\Validatable' => __DIR__ . '/..' . '/lcobucci/jwt/src/Claim/Validatable.php',
        'Lcobucci\\JWT\\Parser' => __DIR__ . '/..' . '/lcobucci/jwt/src/Parser.php',
        'Lcobucci\\JWT\\Parsing\\Decoder' => __DIR__ . '/..' . '/lcobucci/jwt/src/Parsing/Decoder.php',
        'Lcobucci\\JWT\\Parsing\\Encoder' => __DIR__ . '/..' . '/lcobucci/jwt/src/Parsing/Encoder.php',
        'Lcobucci\\JWT\\Signature' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signature.php',
        'Lcobucci\\JWT\\Signer' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer.php',
        'Lcobucci\\JWT\\Signer\\BaseSigner' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/BaseSigner.php',
        'Lcobucci\\JWT\\Signer\\Ecdsa' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Ecdsa.php',
        'Lcobucci\\JWT\\Signer\\Ecdsa\\KeyParser' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Ecdsa/KeyParser.php',
        'Lcobucci\\JWT\\Signer\\Ecdsa\\Sha256' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Ecdsa/Sha256.php',
        'Lcobucci\\JWT\\Signer\\Ecdsa\\Sha384' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Ecdsa/Sha384.php',
        'Lcobucci\\JWT\\Signer\\Ecdsa\\Sha512' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Ecdsa/Sha512.php',
        'Lcobucci\\JWT\\Signer\\Hmac' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Hmac.php',
        'Lcobucci\\JWT\\Signer\\Hmac\\Sha256' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Hmac/Sha256.php',
        'Lcobucci\\JWT\\Signer\\Hmac\\Sha384' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Hmac/Sha384.php',
        'Lcobucci\\JWT\\Signer\\Hmac\\Sha512' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Hmac/Sha512.php',
        'Lcobucci\\JWT\\Signer\\Key' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Key.php',
        'Lcobucci\\JWT\\Signer\\Keychain' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Keychain.php',
        'Lcobucci\\JWT\\Signer\\Rsa' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Rsa.php',
        'Lcobucci\\JWT\\Signer\\Rsa\\Sha256' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Rsa/Sha256.php',
        'Lcobucci\\JWT\\Signer\\Rsa\\Sha384' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Rsa/Sha384.php',
        'Lcobucci\\JWT\\Signer\\Rsa\\Sha512' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Rsa/Sha512.php',
        'Lcobucci\\JWT\\Token' => __DIR__ . '/..' . '/lcobucci/jwt/src/Token.php',
        'Lcobucci\\JWT\\ValidationData' => __DIR__ . '/..' . '/lcobucci/jwt/src/ValidationData.php',
        'Portier\\Client\\AbstractStore' => __DIR__ . '/../..' . '/src/AbstractStore.php',
        'Portier\\Client\\Client' => __DIR__ . '/../..' . '/src/Client.php',
        'Portier\\Client\\RedisStore' => __DIR__ . '/../..' . '/src/RedisStore.php',
        'Portier\\Client\\StoreInterface' => __DIR__ . '/../..' . '/src/StoreInterface.php',
        'Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbff66b1076919b6333f2c7a27bd72760::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbff66b1076919b6333f2c7a27bd72760::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbff66b1076919b6333f2c7a27bd72760::$classMap;

        }, null, ClassLoader::class);
    }
}