(function (Drupal, drupalSettings) {
  'use strict';

  window.CAT_DATA = { ug: {}, pg: {} };
  window.GITAM_DATA = { ug: {}, pg: {} };

  // Get base URL dynamically (e.g., /drupal10/web/api/v1/programmes)
  var apiUrl = (drupalSettings.gitamProgrammeFinder && drupalSettings.gitamProgrammeFinder.apiUrl) 
    ? drupalSettings.gitamProgrammeFinder.apiUrl 
    : (drupalSettings.path ? drupalSettings.path.baseUrl + 'api/v1/programmes' : '/api/v1/programmes');
  fetch(apiUrl)
    .then(function (response) {
      return response.json();
    })
    .then(function (data) {
      window.CAT_DATA = data;
      window.GITAM_DATA = data.programmes;
      console.log(data.programmes)
      document.dispatchEvent(new CustomEvent('gitamDataReady'));
      
      if (typeof window.initProgrammeFinder === 'function') {
        window.initProgrammeFinder();
      }
    })
    .catch(function (err) {
      console.error('Failed to load Programme Finder data:', err);
    });
})(Drupal, drupalSettings);