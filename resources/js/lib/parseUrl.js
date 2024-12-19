export default function getLastPartOfURL(url) {
    const parsedUrl = new URL(url); // Parse the URL
    const pathParts = parsedUrl.pathname.split('/').filter(Boolean); // Split the path and remove empty parts
    return pathParts[pathParts.length - 1]; // Get the last part
}